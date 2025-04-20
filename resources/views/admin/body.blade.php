

<style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #111;
    color: white;
    margin: 0;
  }

  .page-content {
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.85), rgba(40, 20, 20, 0.9));
    padding: 1rem;
  }

  .page-header {
    background: black;
    padding: 1.5rem 0;
    text-align: center;
    border-bottom: 1px solid #444;
  }

  h2 {
    color: white;
    margin: 0;
  }

  .container-fluid {
    padding: 1rem 0;
  }

  .block {
    background-color: #000;
    border-radius: 1rem;
    padding: 1.5rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 0 15px rgba(255, 255, 255, 0.05);
    transition: transform 0.2s;
  }

  .block:hover {
    transform: translateY(-5px);
  }

  .title strong {
    font-size: 1.2rem;
    color: #fff;
  }

  .title span {
    color: #aaa;
    font-size: 0.875rem;
  }

  .progress-bar {
    border-radius: 999px;
  }

  .avatar {
    position: relative;
    margin-bottom: 1rem;
  }

  .avatar img {
    border-radius: 50%;
    border: 3px solid #333;
  }

  .order {
    background-color: #222;
    padding: 0.25rem 0.75rem;
    border-radius: 999px;
    display: inline-block;
    margin-top: 0.5rem;
  }

  .details .item {
    flex: 1;
    text-align: center;
    font-size: 0.85rem;
    color: #ccc;
  }

  .details .item strong {
    display: block;
    font-size: 1.1rem;
    color: white;
  }

  .message, .checklist .item {
    padding: 0.75rem 1rem;
    border-bottom: 1px solid #222;
    display: flex;
    align-items: center;
  }

  .checklist label {
    margin-left: 0.5rem;
    color: #ccc;
  }

  .text strong {
    color: #fff;
    font-size: 1.1rem;
  }

  .text span, .text small {
    color: #888;
  }

  canvas {
    width: 100% !important;
    height: auto !important;
  }
</style>

<!-- HTML structure remains unchanged. -->
<!-- Paste your original HTML layout here -->

<div class="page-content">
        <div class="page-header" style="background: black;">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom" style="z-index: 111; color: white;">Dashboard</h2>
          </div>
        </div>
        <section class="no-padding-top no-padding-bottom" >
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3 col-sm-6" style="background-color: black;">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-user-1"></i></div><strong>New Clients</strong>
                    </div>
                    <div class="number dashtext-1">27</div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-contract"></i></div><strong>New Projects</strong>
                    </div>
                    <div class="number dashtext-2">375</div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-paper-and-pencil"></i></div><strong>New Invoices</strong>
                    </div>
                    <div class="number dashtext-3">140</div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-writing-whiteboard"></i></div><strong>All Projects</strong>
                    </div>
                    <div class="number dashtext-4">41</div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        
       
       
       
        