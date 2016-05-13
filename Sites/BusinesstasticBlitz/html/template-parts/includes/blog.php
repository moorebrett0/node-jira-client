<div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->

                <!-- Title -->
                <h1>{{pages.blog.title}}</h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="#">{{pages.blog.excerpt}}</a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted on {{pages.blog.published_at | date: "%a, %b %d, %y"}}</p>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">

                <hr>

                <!-- Post Content -->
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>

                <hr>

                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Alan Doe
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Emma Doe
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        <!-- Nested Comment -->
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placehold.it/64x64" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">emma doe
                                    <small>August 25, 2014 at 9:30 PM</small>
                                </h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>
                        <!-- End Nested Comment -->
                    </div>
                </div>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">
                    <div class="sidebar">
                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button" Placeholder="Search the Blog">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <h4>Header 3 sidebar title</h4>
                    <p>This is a spot with some text for the blog</p>
                    <h4>Recent Posts</h4>
                    <div class="blog-sidebar-recent">
                            <p>Post Title</p>
                            <p>November 17th, 2015</p>
                    </div>
                    <div class="sidebar-categories">
                           <h4>Categories</h4>
                           <ol class="list-unstyled">
                             <li><a href="#">Fun stuff</a></li>
                             <li><a href="#">cool stuff</a></li>
                             <li><a href="#">rad stuff</a></li>
                             <li><a href="#">green stuff</a></li>
                     </ol>
                   </div>
                    <div class="sidebar-archives">
                            <h4>Archives</h4>
                            <ol class="list-unstyled">
                              <li><a href="#">March 2014</a></li>
                              <li><a href="#">February 2014</a></li>
                              <li><a href="#">January 2014</a></li>
                              <li><a href="#">December 2013</a></li>
                              <li><a href="#">November 2013</a></li>
                              <li><a href="#">October 2013</a></li>
                              <li><a href="#">September 2013</a></li>
                              <li><a href="#">August 2013</a></li>
                              <li><a href="#">July 2013</a></li>
                              <li><a href="#">June 2013</a></li>
                              <li><a href="#">May 2013</a></li>
                              <li><a href="#">April 2013</a></li>
                            </ol>
                          </div>
                </div>

                    <!-- /.input-group -->
                </div>
        </div>

                <!-- Blog Categories Well -->


                <!-- Side Widget Well -->

            </div>
            <div class="section">
     <div class="container">
       <div class="row">
         <div class="col-md-12 text-center">
           <ul class="pagination">
             <li>
               <a href="#">&laquo;</a>
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
               <a href="#">&raquo;</a>
             </li>
           </ul>
         </div>
       </div>
     </div>
        </div>
</div>
        <!-- /.row -->
