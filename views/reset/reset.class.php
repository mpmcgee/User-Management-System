<?php
/**
 * Author: Matthew McGee
 * Date: 10/30/2020
 * File: reset.class.php
 *Description:
 */

class Reset extends View{
    public function display() {

        //call the header method defined in the parent class to add the header
        parent::header();
        ?>
        <!-- page specific content starts -->
        <!-- top row for the page header  -->
        <div class="top-row"></div>
        <div class="top-row">RESET PASSWORD</div>

        <!-- middle row -->
        <h3>Please enter a new password. Username is not changeable.</h3>
        <div class="middle-row">
            <form method="POST" action="index.php">
                <p>
                    <input id="username" value="<? ?>" name="username" type="text" required="required" placeholder="username"/>
                    <br>
                </p>
                <p>
                    <input id="password" value="" name="password" type="text" required="required" placeholder="Password, 5 characters minimum"/>
                    <br>
                </p>
                <button type="submit"><span>RESET PASSWORD</span></button>
            </form>
        </div>
        <!-- bottom row for links  -->
        <div class="bottom-row">
            <span style="float: right">Cancel password reset?<a href="index.php">Cancel Reset</a></span>
        </div>
        <!-- page specific content ends -->


        <?php
        //call the footer method defined in the parent class to add the footer
        parent::footer();
    }
}