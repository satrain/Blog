<?php

class PostsForm {
    
    public $form;

    public function getPostsForm() {
        $this->form = "
        <form action='../includes/setpost.inc.php' method='post'>
            <input type='text' name='post_author' placeholder='Set post author'><br>
            <input type='text' name='post_heading' placeholder='Set post heading'><br>
            <input type='text' name='post_body' placeholder='Set post body'><br>
            <input type='text' name='post_category' placeholder='Set post category'><br>
            <input type='submit' name='setPost' value='Add post'>
        </form>
        ";
        echo $this->form;
    }

}