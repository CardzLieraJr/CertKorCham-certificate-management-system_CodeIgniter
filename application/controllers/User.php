<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class User extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->isLoggedIn();
    }

    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
        $this->global['pageTitle'] = 'CertKorCham.Net : Dashboard';

        $this->loadViews("index", $this->global, NULL, NULL);
    }

    /**
     * This function is used to load the user list
     */
    function userListing()
    {
        if ($this->isAdmin() == TRUE) {
            $this->loadThis();
        } else {
            $searchText = $this->security->xss_clean($this->input->post('searchText') ?? '');
            $data['searchText'] = $searchText;

            $this->load->library('pagination');

            $count = $this->user_model->userListingCount($searchText);

            $returns = $this->paginationCompress("userListing/", $count, 10);

            $data['userRecords'] = $this->user_model->userListing($searchText, $returns["page"], $returns["segment"]);

            $this->global['pageTitle'] = 'CertKorCham.Net : User Listing';

            $this->loadViews("users", $this->global, $data, NULL);
        }
    }

    /**
     * This function is used to load the add new form
     */
    function addNew()
    {
        if ($this->isAdmin() == TRUE) {
            $this->loadThis();
        } else {
            $this->load->model('user_model');
            $data['roles'] = $this->user_model->getUserRoles();

            $this->global['pageTitle'] = 'CertKorCham.Net : Add New User';

            $this->loadViews("addNew", $this->global, $data, NULL);
        }
    }

    /**
     * This function is used to check whether email already exist or not
     */
    function checkEmailExists()
    {
        $userId = $this->input->post("userId");
        $email = $this->input->post("email");

        if (empty($userId)) {
            $result = $this->user_model->checkEmailExists($email);
        } else {
            $result = $this->user_model->checkEmailExists($email, $userId);
        }

        if (empty($result)) {
            echo ("true");
        } else {
            echo ("false");
        }
    }

    /**
     * This function is used to add new user to the system
     */

    function addNewUser()
    {
        if ($this->isAdmin() == TRUE) {
            $this->loadThis();
            return;
        }

        $this->load->library('form_validation');

        // If form is submitted
        if ($this->input->post()) {

            $this->form_validation->set_rules('fname', 'Full Name', 'trim|required|max_length[128]');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|max_length[128]');
            $this->form_validation->set_rules('password', 'Password', 'required|max_length[20]');
            $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches[password]|max_length[20]');
            $this->form_validation->set_rules('role', 'Role', 'trim|required|numeric');

            if ($this->form_validation->run() == FALSE) {

                $this->session->set_flashdata('error', validation_errors());
                redirect('addNew');
                return;
            }

            $name = ucwords(strtolower($this->security->xss_clean($this->input->post('fname'))));
            $email = strtolower($this->security->xss_clean($this->input->post('email')));
            $password = $this->input->post('password');
            $roleId = $this->input->post('role');

            if ($this->user_model->checkEmailExists($email)) {

                $this->session->set_flashdata('error', 'Email already exists');
                redirect('addNew');
                return;
            }

            $userInfo = array(
                'email' => $email,
                'password' => getHashedPassword($password),
                'roleId' => $roleId,
                'name' => $name,
                'createdBy' => $this->vendorId,
                'createdDtm' => date('Y-m-d H:i:s')
            );

            $result = $this->user_model->addNewUser($userInfo);

            if ($result > 0) {
                $this->session->set_flashdata('success', 'New User created successfully');
            } else {
                $this->session->set_flashdata('error', 'User creation failed');
            }

            redirect('userListing');
        }

        // Load form page (NO MESSAGE HERE)
        $this->load->view('addNew');
    }

    /**
     * This function is used load user edit information
     * @param number $userId : Optional : This is user id
     */
    function editOld($userId = NULL)
    {
        if ($this->isAdmin() == TRUE || $userId == 1) {
            $this->loadThis();
        } else {
            if ($userId == null) {
                redirect('userListing');
            }

            $data['roles'] = $this->user_model->getUserRoles();
            $data['userInfo'] = $this->user_model->getUserInfo($userId);

            $this->global['pageTitle'] = 'CertKorCham.Net : Edit User';

            $this->loadViews("editOld", $this->global, $data, NULL);
        }
    }


    /**
     * This function is used to edit the user information
     */
    public function editUser()
    {
        if ($this->isAdmin() == TRUE) {
            $this->loadThis();
            return;
        }

        $this->load->library('form_validation');

        $userId = (int) $this->input->post('userId');

        $this->form_validation->set_rules('fname', 'Full Name', 'trim|required|max_length[128]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|max_length[128]');
        $this->form_validation->set_rules('password', 'Password', 'trim|max_length[20]|matches[cpassword]');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|max_length[20]|matches[password]');
        $this->form_validation->set_rules('role', 'Role', 'trim|required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->editOld($userId);
            return;
        }

        $name     = ucwords(strtolower($this->input->post('fname', TRUE)));
        $email    = strtolower($this->input->post('email', TRUE));
        $password = $this->input->post('password');
        $roleId   = (int) $this->input->post('role');

        $userInfo = [
            'name'       => $name,
            'email'      => $email,
            'roleId'     => $roleId,
            'updatedBy'  => $this->vendorId,
            'updatedDtm' => date('Y-m-d H:i:s')
        ];

        if (!empty($password)) {
            $userInfo['password'] = getHashedPassword($password);
        }

        $result = $this->user_model->editUser($userInfo, $userId);

        if ($result) {
            $this->session->set_flashdata('success', 'User updated successfully.');
        } else {
            $this->session->set_flashdata('error', 'User update failed.');
        }

        redirect('userListing');
    }


    /**
     * This function is used to delete the user using userId
     * @return boolean $result : TRUE / FALSE
     */
    function deleteUser()
    {
        if ($this->isAdmin() == TRUE) {
            echo (json_encode(array('status' => 'access')));
        } else {
            $userId = $this->input->post('userId');
            $userInfo = array('isDeleted' => 1, 'updatedBy' => $this->vendorId, 'updatedDtm' => date('Y-m-d H:i:s'));

            $result = $this->user_model->deleteUser($userId, $userInfo);

            if ($result > 0) {
                echo (json_encode(array('status' => TRUE)));
            } else {
                echo (json_encode(array('status' => FALSE)));
            }
        }
    }

    /**
     * Page not found : error 404
     */
    function pageNotFound()
    {
        $this->global['pageTitle'] = 'CertKorCham.Net : 404 - Page Not Found';

        $this->loadViews("404", $this->global, NULL, NULL);
    }

    /**
     * This function used to show login history
     * @param number $userId : This is user id
     */
    function loginHistoy($userId = NULL)
    {
        if ($this->isAdmin() == TRUE) {
            $this->loadThis();
        } else {
            $userId = ($userId == NULL ? 0 : $userId);

            $searchText = $this->input->post('searchText');
            $fromDate = $this->input->post('fromDate');
            $toDate = $this->input->post('toDate');

            $data["userInfo"] = $this->user_model->getUserInfoById($userId);

            $data['searchText'] = $searchText;
            $data['fromDate'] = $fromDate;
            $data['toDate'] = $toDate;

            $this->load->library('pagination');

            $count = $this->user_model->loginHistoryCount($userId, $searchText, $fromDate, $toDate);

            $returns = $this->paginationCompress("login-history/" . $userId . "/", $count, 10, 3);

            $data['userRecords'] = $this->user_model->loginHistory($userId, $searchText, $fromDate, $toDate, $returns["page"], $returns["segment"]);

            $this->global['pageTitle'] = 'CertKorCham.Net : User Login History';

            $this->loadViews("loginHistory", $this->global, $data, NULL);
        }
    }

    /**
     * This function is used to show users profile
     */
    function profile($active = "details")
    {
        $data["userInfo"] = $this->user_model->getUserInfoWithRole($this->vendorId);
        $data["active"] = $active;

        $this->global['pageTitle'] = $active == "details" ? 'CertKorCham.Net : My Profile' : 'CertKorCham.Net : Change Password';
        $this->loadViews("profile", $this->global, $data, NULL);
    }

    /**
     * This function is used to update the user details
     * @param text $active : This is flag to set the active tab
     */
    function profileUpdate($active = "details")
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('fname', 'Full Name', 'trim|required|max_length[128]');

        if ($this->form_validation->run() == FALSE) {
            $this->profile($active);
        } else {
            $name = ucwords(strtolower($this->security->xss_clean($this->input->post('fname'))));

            $userInfo = array('name' => $name, 'updatedBy' => $this->vendorId, 'updatedDtm' => date('Y-m-d H:i:s'));

            $result = $this->user_model->editUser($userInfo, $this->vendorId);

            if ($result == true) {
                $this->session->set_userdata('name', $name);
                $this->session->set_flashdata('success', 'Profile updated successfully');
            } else {
                $this->session->set_flashdata('error', 'Profile update failed');
            }

            redirect('profile/' . $active);
        }
    }

    /**
     * This function is used to change the password of the user
     * @param text $active : This is flag to set the active tab
     */
    function changePassword($active = "changepass")
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('oldPassword', 'Old password', 'required|max_length[20]');
        $this->form_validation->set_rules('newPassword', 'New password', 'required|max_length[20]');
        $this->form_validation->set_rules('cNewPassword', 'Confirm new password', 'required|matches[newPassword]|max_length[20]');

        if ($this->form_validation->run() == FALSE) {
            $this->profile($active);
        } else {
            $oldPassword = $this->input->post('oldPassword');
            $newPassword = $this->input->post('newPassword');

            $resultPas = $this->user_model->matchOldPassword($this->vendorId, $oldPassword);

            if (empty($resultPas)) {
                $this->session->set_flashdata('nomatch', 'Your old password is not correct');
                redirect('profile/' . $active);
            } else {
                $usersData = array(
                    'password' => getHashedPassword($newPassword),
                    'updatedBy' => $this->vendorId,
                    'updatedDtm' => date('Y-m-d H:i:s')
                );

                $result = $this->user_model->changePassword($this->vendorId, $usersData);

                if ($result > 0) {
                    $this->session->set_flashdata('success', 'Password updated successfully');
                } else {
                    $this->session->set_flashdata('error', 'Password update failed');
                }

                redirect('profile/' . $active);
            }
        }
    }
}
