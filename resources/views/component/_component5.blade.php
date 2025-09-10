   <style>
       .card-custom {
           background-color: #0d3b66;
           color: white;
           /* semua teks putih */
           border: none;
           transition: transform 0.3s ease;
       }

       .card-custom:hover {
           transform: translateY(-10px);
       }

       .card-custom img {
           width: 150px;
           height: 150px;
           object-fit: cover;
           margin: 0 auto 15px auto;
           display: block;
       }

       .percentage {
           font-size: 2rem;
           font-weight: bold;
           color: #ffdd99;
       }

       .card-title {
           color: #fff !important;
       }

       .card-text {
           color: #fff !important;
       }
   </style>
   <div class="container py-5">
       <div class="row">
           <!-- Left Text -->
           <div class="col-lg-4 mb-4">
               <h2 class="fw-bold text-primary">
                   Our approach in designing integrated talent development is comprehensive to ignite cognitive...
               </h2>
               <h4 class="mt-4 fw-bold">70:20:10 <br>Learning Model</h4>
               <p class="text-muted">
                   The 70-20-10 model is considered most effective as a general guideline for organizations
                   seeking to maximize the effectiveness of their learning, and program development through
                   activities and others.
               </p>
           </div>

           <!-- Right Cards -->
           <div class="col-lg-8">
               <div class="row g-4">
                   <!-- 70% On-the-job Learning -->
                   <div class="col-md-4">
                       <div class="card card-custom text-center shadow-lg p-3 h-100">
                           <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=300&q=80"
                               class="rounded-circle shadow" alt="On the Job">
                           <div class="card-body">
                               <div class="percentage">70%</div>
                               <h5 class="card-title fw-bold">On-the-job Learning</h5>
                               <p class="card-text small">
                                   Learning and development will take place from real-life assignments, projects,
                                   delegated tasks, decision making and extensive work experience across a variety
                                   of functions and areas of your business.
                               </p>
                           </div>
                       </div>
                   </div>
                   <!-- 20% Developmental Relationships -->
                   <div class="col-md-4">
                       <div class="card card-custom text-center shadow-lg p-3 h-100">
                           <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=300&q=80"
                               class="rounded-circle shadow" alt="Developmental Relationships">
                           <div class="card-body">
                               <div class="percentage">20%</div>
                               <h5 class="card-title fw-bold">Developmental Relationships</h5>
                               <p class="card-text small">
                                   Learning and development will occur from relationships with others – especially
                                   those more senior in experience – through informal and formal feedback, mentoring,
                                   coaching and line manager support.
                               </p>
                           </div>
                       </div>
                   </div>
                   <!-- 10% Formal Learning -->
                   <div class="col-md-4">
                       <div class="card card-custom text-center shadow-lg p-3 h-100">
                         <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=300&q=80" class="rounded-circle shadow" alt="Developmental Relationships">

                           <div class="card-body">
                               <div class="percentage">10%</div>
                               <h5 class="card-title fw-bold">Formal Learning</h5>
                               <p class="card-text small">
                                   Learning and development from formal training – designed to help participants grow
                                   in the competencies required for the job.
                               </p>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
