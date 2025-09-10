   <style>
       .step-card {
           background: #f8f9fa;
           border-radius: 12px;
           padding: 15px 20px;
           display: flex;
           align-items: center;
           margin-bottom: 15px;
           transition: transform 0.3s ease;
       }

       .step-card:hover {
           transform: translateX(5px);
       }

       .step-icon {
           font-size: 2rem;
           margin-right: 15px;
       }

       .step-text strong {
           display: block;
           font-size: 1rem;
       }

       .highlight-title {
           font-weight: bold;
           font-style: italic;
       }
   </style>
   <div class="container py-5">
       <div class="row align-items-center">
           <!-- Left Section -->
           <div class="col-lg-5 mb-4">

               <h3 class="fw-bold">Our Approach:</h3>
               <h2 class="highlight-title">Experiential Learning</h2>
           </div>

           <!-- Right Section -->
           <div class="col-lg-7">
               <div class="step-card">
                   <i class="bi bi-controller step-icon text-success"></i>
                   <div class="step-text">
                       <strong>FRONTLOADING</strong>
                       <small>Activities (Permainan, Diskusi awal, dll)</small>
                   </div>
               </div>
               <div class="step-card">
                   <i class="bi bi-people-fill step-icon text-success"></i>
                   <div class="step-text">
                       <strong>FACTS</strong>
                       <small>What happened? What works? What doesn't work?</small>
                   </div>
               </div>
               <div class="step-card">
                   <i class="bi bi-emoji-smile step-icon text-danger"></i>
                   <div class="step-text">
                       <strong>FEELINGS</strong>
                       <small>What makes you happy about the facts? What's not? What excites you?</small>
                   </div>
               </div>
               <div class="step-card">
                   <i class="bi bi-chat-left-text step-icon text-secondary"></i>
                   <div class="step-text">
                       <strong>FINDINGS</strong>
                       <small>What did you discover about yourself? About other people? About your team? About the topic
                           being discussed?</small>
                   </div>
               </div>
               <div class="step-card">
                   <i class="bi bi-fast-forward-fill step-icon text-primary"></i>
                   <div class="step-text">
                       <strong>FUTURE</strong>
                       <small>What's next? So what? What do we need to do for Start, Stop and Continue?</small>
                   </div>
               </div>
           </div>
       </div>
   </div>
