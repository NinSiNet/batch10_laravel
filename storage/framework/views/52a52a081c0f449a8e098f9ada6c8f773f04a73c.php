<?php $__env->startSection('content'); ?>

 <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4"><?php echo e($post->title); ?></h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#"><?php echo e($post->user->name); ?></a>
        </p>

    

        <!-- Date/Time -->
        <div>
      <p class="float-left">Posted on <?php echo e($post->created_at->toDayDateTimeString()); ?>


          </div>
          <div class="float-right">
             <?php if(Auth::check() && Auth::id()==$post->user_id): ?>
        <a href="<?php echo e(route('post.edit',$post->id)); ?>" class="btn btn-primary">Edit</a>

        <form method="post" action="<?php echo e(route('post.destroy',$post->id)); ?>">
          <?php echo csrf_field(); ?>
          <?php echo method_field('DELETE'); ?>
           <input type="submit" class="btn btn-primary" value="delete">
        </form>
        <?php endif; ?>
    
   <span><?php echo e($post->category->name); ?></span>

     
    </div>
    


    </p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="<?php echo e(asset($post->image)); ?>" alt="">

        <hr>

        <!-- Post Content -->
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>

        <blockquote class="blockquote">
          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <footer class="blockquote-footer">Someone famous in
            <cite title="Source Title">Source Title</cite>
          </footer>
        </blockquote>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>

        <hr>

        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form method="post" action="<?php echo e(route('review.store')); ?>">
              <?php echo csrf_field(); ?>
              <div class="form-group">
                <textarea class="form-control" rows="3" name="content"></textarea>
                <input type="hidden" name="postid" value="<?php echo e($post->id); ?>">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          
          </div>
        </div>
        <?php
        $reviews=$post->reviews;
        ?>

        <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle w-25" src="<?php echo e(asset($post->user->avatar)); ?>" alt="" width="20">
          <div class="media-body">
            <h5 class="mt-0"><?php echo e(($post->user->name)); ?></h5>
            <?php echo e($row->body); ?>

          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        
      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Web Design</a>
                  </li>
                  <li>
                    <a href="#">HTML</a>
                  </li>
                  <li>
                    <a href="#">Freebies</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                  <li>
                    <a href="#">CSS</a>
                  </li>
                  <li>
                    <a href="#">Tutorials</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/batch10_blog/resources/views/post/detail.blade.php ENDPATH**/ ?>