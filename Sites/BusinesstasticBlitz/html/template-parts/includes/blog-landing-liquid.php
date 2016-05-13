<div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->

                <!-- Title -->
                <h1>{{pages.blog.title}}</h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="#">{{pages.blog.author}}</a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted on {{pages.blog.published_at | date: "%a, %b %d, %y"}}</p>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="{{blog | img_tag}}" alt="">

                <hr>

                <!-- Post Content -->
                <p class="lead">{{pages.blog.excerpt}}</p>






                    </div>
                     <!-- Blog Sidebar Widgets Column -->
                    <?php include '../template-parts/includes/blog-sidebar.php'; ?>
                </div>

            </div>





            </div>
            <div class="section">
     <div class="container">
       <div class="row">
         <div class="col-md-12 text-center">
           <ul class="pagination">
             <li>
               <a href="#">{{paginate.previous}}</a>
             </li>
             <li>
               <a href="#">1</a>
             </li>
             <li>
               <a href="#">2</a>
             </li>
             <li>
               <a href="#">3</a>
             </li>
             <li>
               <a href="#">4</a>
             </li>
             <li>
               <a href="#">5</a>
             </li>
             <li>
               <a href="#">{{paginate.next}}</a>
             </li>
           </ul>
         </div>
       </div>
     </div>
        </div>
</div>
        <!-- /.row -->
