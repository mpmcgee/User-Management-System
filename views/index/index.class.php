<?php
/**
 * Author: Matthew McGee
 * Date: 10/30/2020
 * File: index.class.php
 *Description:
 */

class Index extends View
{
    public function display() {

        //call the header method defined in the parent class to add the header
        parent::header();
        ?>
        <!-- page specific content starts -->
        <!-- top row for the page header  -->
        <div class="top-row">CREATE AN ACCOUNT</div>
        <div class="header">
            <h3>Please complete the entire form. All fields required.</h3>
        </div>
        <!-- middle row -->
        <div class="middle-row">
        <form method="POST" action="index.php">
            <p>
                <input id="username" value="" name="username" type="text" required="required" placeholder="Username"/>
                <br>
            </p>
            <p>
                <input id="password" value="" name="password" type="text" required="required" placeholder="Password, 5 characters minimum"/>
                <br>
            </p>
            <p>
                <input id="email" value="" name="email" type="email" required="required" placeholder="Email"/>
                <br>
            </p>
            <p>
                <input id="firstname" value="" name="firstname" type="text" required="required" placeholder="First name"/>
                <br>
            </p>
            <p>
                <input id="lastname" value="" name="lastname" type="text" required="required" placeholder="Last name"/>
                <br>
            </p>
            <button type="submit"><span>Register</span></button>
        </form>
        </div>
        <!-- bottom row for links  -->
        <div class="bottom-row">
            <span style="float: left">Already have an account? <a href="index.php?action=login">Login</a></span>
        </div>
        <!-- page specific content ends -->


        <?php
        //call the footer method defined in the parent class to add the footer
        parent::footer();
    }
}
