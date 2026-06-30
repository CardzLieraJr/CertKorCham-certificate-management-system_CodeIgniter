/**
 * File : addUser.js
 * 
 * This file contain the validation of add user form
 * 
 * Using validation plugin : jquery.validate.js
 * 
 */

/**
 * File : addUser.js
 * Validation for Add User Form
 */

$(document).ready(function () {

    $("#addUser").validate({

        rules: {
            fname: {
                required: true
            },
            email: {
                required: true,
                email: true,
                remote: {
                    url: baseURL + "checkEmailExists",
                    type: "post"
                }
            },
            password: {
                required: true
            },
            cpassword: {
                required: true,
                equalTo: "#password"
            },
            role: {
                required: true,
                min: 1
            }
        },

        messages: {
            fname: {
                required: "Please enter full name"
            },
            email: {
                required: "Please enter email",
                email: "Please enter a valid email",
                remote: "Email already exists"
            },
            password: {
                required: "Please enter password"
            },
            cpassword: {
                required: "Please confirm password",
                equalTo: "Passwords do not match"
            },
            role: {
                required: "Please select a role",
                min: "Please select a role"
            }
        }

    });

});
