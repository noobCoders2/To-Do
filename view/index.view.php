 <?php include('partials/head.php'); ?>
 <div class="container">
     <h1>Todo list Application</h1>

     <div class="content">
         <form action="">
             <div class="input_container">
                 <div class="inputs">
                     <label for="Title">Title:</label>
                     <input type="text" name="todo" />

                     <hr />
                     <label for="todo">Information:</label>
                     <textarea name="" id=""></textarea>
                 </div>
             </div>
             <button type="submit">Post</button>
         </form>

         <div class="todo_list_container">
             <p>hello first todo</p>

             <div class="btns">
                 <button class="delete_btn">Delete</button>
                 <button class="edit_btn">Edit</button>
             </div>
         </div>
     </div>
 </div>

 <!-- modal -->
 <div class="modal_container">
     <div class="modal">
         <div class="modal_header">
             <div class="Modalheader">
                 <h2>Edit Todo</h2>
             </div>
             <p>Save changes successfully</p>
         </div>
         <form action="">
             <div class="input_container">
                 <div class="inputs">
                     <label for="Title">Title:</label>
                     <input type="text" name="todo" />

                     <hr />
                     <label for="todo">Information:</label>
                     <textarea name="" id=""></textarea>
                 </div>
             </div>
             <button type="submit" class="modal_save_btn">Save</button>
             <button type="button" class="modal_close_btn">Close</button>
         </form>
     </div>
 </div>
 <?php include "partials/footer.php"; ?>