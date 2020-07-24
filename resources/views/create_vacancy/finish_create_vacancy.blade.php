<!--Фаил окна создания вакансии-->
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Размещение вакансии</title>
  <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/css/create_form.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
        @csrf
        <div class="">
          <input type="hidden" name="name" value="{{ $name }}">
          <input type="hidden" name="company" value="{{ $company }}">
          <input type="hidden" name="vacancy" value="{{ $vacancy }}">
          <input type="hidden" name="city" value="{{ $city }}">
          <input type="hidden" name="phone" value="{{ $phone }}">
          <input type="hidden" name="type_employ" value="{{ $type_employ }}">
          <input type="hidden" name="schedule_work" value="{{ $schedule_work }}">
          <input type="hidden" name="min_salary" value="{{ $min_salary }}">
          <input type="hidden" name="max_salary" value="{{ $max_salary }}">
          <input type="hidden" name="key_skills" value="{{ $key_skills }}">
          <input type="hidden" name="description_job" value="{{ $description_job }}">
          <input type="hidden" name="duties" value="{{ $duties }}">
          <input type="hidden" name="requirements" value="{{ $requirements }}">
          <input type="hidden" name="requirements_optional" value="{{ $requirements_optional }}">
          <input type="hidden" name="if" value="{{ $if }}">
          <input type="hidden" name="additionally" value="{{ $additionally }}">
        </div>
        <div class="data-display-container bloc">

          <div class="tabs tabs-border">
            <a class="active tab" href="">Job Details</a>
            <div class="fl-r">
              <a href="#">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                </svg>
              </a>
            </div>
          </div>

          <!--<div class="seperate-bottom tab bloc jdp-description-details" id="jdp_description">
          <div class="col-2">
          <div class="col big col-mobile-full">
          <strong>Description</strong><br>

          <p>Coder will report directly their Regional Coding Manager, with additional leadership from the Director of Coding Operations and System HIM/Coding Director.</p>
          <p></p>
          <p><strong>MAJOR RESPONSIBILITIES</strong></p>
          <ul>
          <li>Assign codes for diagnoses, treatments and procedures according to the ICD-10-CM and CPT Official Guidelines for Coding and Reporting through review of coding critical documentation.</li>
          <li>Extracts and abstracts required information from source documentation, to be entered into appropriate CHRISTUS Health electronic medical record system.</li>
          <li>Works from assigned coding queue, completing and re-assigning accounts correctly.</li>
          <li>Manages accounts on ABS Hold, finalizing accounts when corrections have been made, in a timely manner.</li>
          <li>Meets or exceeds an accuracy rate of 95%.</li>
          <li>Meets or exceeds the designated CHRISTUS Health Productivity standard per chart type.</li>
          <li>Abides by the Standards of Ethical Coding as set forth by the American Health Information Management Association (AHIMA).</li>
          <li>Assists in implementing solutions to reduce backend-errors.</li>
          <li>Expertly queries providers for missing or unclear documentation, by working with the HIM department and Clinical Documentation Improvement Specialists.</li>
          <li>Participates in both internal and external audit discussions.</li>
          <li>All other work duties as assigned by Manager.</li>
          </ul>
          <br><br><strong>Requirements</strong><br><p><strong>Requirements:&nbsp;</strong></p>
          <p><strong>EDUCATION/SKILLS:</strong></p>
          <ul>
          <li>High school Diploma or GED</li>
          <li>Completion of Accredited Baccalaureate Health Informatics or Health Information Management or an AHIMA approved Coding Certificate Program, preferred.</li>
          <li>Strong written and verbal communication skills.</li>
          <li>Able to work independently in a remote setting, with little supervision.</li>
          <li>Two(2) years of Outpatient coding in an accute care setting.</li>
          <li>Registered Health Information Administrator (RHIA) (AHIMA)</li>
          <li>Registered Health Information Technician (RHIT) (AHIMA)</li>
          <li>Certified Coding Specialist (CCS) (AHIMA)</li>
          <li>Certified Coding Associate (CCA) (AHIMA)</li>
          <li>Certified Coding Professional (CPC) (AAPC)</li>
          <li>Certified Outpatient Coder (COC) (AAPC)</li>
          </ul>
          <p><strong><em>Preferred Qualifications:</em></strong></p>
          <ul>
          <li>Meditech experience preferred</li>
          <li>Encoder experience preferred</li>
          </ul>
          <div class="bloc">&nbsp;</div>
          <div class="bloc">
          <h4 class="dark-blue-text pb">Recommended skills</h4>
          <div class="check-bubble">Cpt Coding</div>
          <div class="check-bubble">Emergency Departments</div>
          <div class="check-bubble">Implantable Cardioverter Defibrillator</div>
          <div class="check-bubble">Health Information Management</div>
          <div class="check-bubble">Ethics</div>
          <div class="check-bubble">Verbal Communication</div>
          </div>

          </div>
          <div class="col small col-mobile-full seperate-top-border-mobile" id="col-right">
          <div class="show-mobile seperate-top-border-mobile pb30">
          <h4 class="pb">Recommended Jobs</h4>
          <div class="mb10">

          </div>
          <div class="data-results-content-parent relative">
          <a class="data-results-save-job saved-job-j3s47h6b1wly925glvg" data-gtm="jrp-job-list|save-link-modal-prompt" href="https://www.careerbuilder.com/user/sign-in?next=https://www.careerbuilder.com/job/J3S47H6B1WLY925GLVG"><i class="fa fa-heart-o"></i>
          </a>
          <a class="data-results-content block job-listing-item" href="/job/J3S47H6B1WLY925GLVG?ipath=CRKR1"><div class="col-2 layout-results">
          <div class="col small col-mobile-inline">
          <div class="data-results-img"><img alt="CHRISTUS Health" data-src="https://www.careerbuilder.com/cdn/optimized/us-production/12db65ea2af5426c4338e83274b802ce.JPG" class="lazy intl-company-logo" onerror="imgNotLoaded(this)" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"></div>
          </div>
          <div class="col big col-mobile-inline">
          <div class="data-results-title dark-blue-text b">Remote HIM Coder II- Medical Records Coding</div>
          <div class="data-details">
          <span>CHRISTUS Health</span>
          <span>Longview</span>
          <span>Full-Time</span>
          </div>
          <div class="data-snapshot">
          <div class="block"></div>
          </div>
          </div>
          </div>
          </a></div>
          <div class="data-results-content-parent relative">
          <a class="data-results-save-job saved-job-j3m7h16r844251cxhkz" data-gtm="jrp-job-list|save-link-modal-prompt" href="https://www.careerbuilder.com/user/sign-in?next=https://www.careerbuilder.com/job/J3M7H16R844251CXHKZ"><i class="fa fa-heart-o"></i>
          </a>
          <a class="data-results-content block job-listing-item" href="/job/J3M7H16R844251CXHKZ?ipath=CRKR2"><div class="col-2 layout-results">
          <div class="col small col-mobile-inline">
          <div class="data-results-img"><img alt="CHRISTUS Health" data-src="https://www.careerbuilder.com/cdn/optimized/us-production/12db65ea2af5426c4338e83274b802ce.JPG" class="lazy intl-company-logo" onerror="imgNotLoaded(this)" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"></div>
          </div>
          <div class="col big col-mobile-inline">
          <div class="data-results-title dark-blue-text b">Remote HIM Coder II - Medical Records Coding</div>
          <div class="data-details">
          <span>CHRISTUS Health</span>
          <span>Longview</span>
          </div>
          <div class="data-snapshot">
          <div class="block"></div>
          </div>
          </div>
          </div>
          </a></div>
          <div class="data-results-content-parent relative">
          <a class="data-results-save-job saved-job-j3p2rt60cy16syj9j4s" data-gtm="jrp-job-list|save-link-modal-prompt" href="https://www.careerbuilder.com/user/sign-in?next=https://www.careerbuilder.com/job/J3P2RT60CY16SYJ9J4S"><i class="fa fa-heart-o"></i>
          </a>
          <a class="data-results-content block job-listing-item" href="/job/J3P2RT60CY16SYJ9J4S?ipath=CRKR3"><div class="col-2 layout-results">
          <div class="col small col-mobile-inline">
          <div class="data-results-img"><img alt="CHRISTUS Health" data-src="https://www.careerbuilder.com/cdn/optimized/us-production/12db65ea2af5426c4338e83274b802ce.JPG" class="lazy intl-company-logo" onerror="imgNotLoaded(this)" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"></div>
          </div>
          <div class="col big col-mobile-inline">
          <div class="data-results-title dark-blue-text b">LVN - Cardiology Clinic</div>
          <div class="data-details">
          <span>CHRISTUS Health</span>
          <span>Longview</span>
          </div>
          <div class="data-snapshot">
          <div class="block"></div>
          </div>
          </div>
          </div>
          </a></div>

          </div>
          <div class="show-mobile bloc center seperate-bottom dn" id="square-ad" style="display: none !important;"></div>


          </div>
          </div>
          <div class="seperate hide-mobile" id="apply-bottom-content">
          <div id="apply-bottom" style="top: auto; bottom: 254px;">
          <div class="col-2">
          <div class="col big col-mobile-full">
          <div class="b">Apply to this job.</div>
          Think you're the perfect candidate?
          </div>
          <div class="col small col-mobile-full"><a class="external-apply-link btn btn-linear btn-linear-green btn-block btn-alone" data-gtm="job-action|apply-external-bottom" href="#">Apply on company site</a>
          <script>
            $('.external-apply-email-saved').on('click', function (event) {
              window.ExternalApply = window.open('/interstitial', 'ExternalApply-j3s47h6b1wly925glvg');
            });
          </script>
          </div>
          </div>
          </div>
          </div>
          <div class="hide-mobile seperate-bottom bloc center dn" id="banner-ad" style="display: none;"></div>
          <div class="seperate-bottom" id="cb-tip">
          <p>
          Help us improve CareerBuilder by providing feedback about this job:
          <a class="report-job-link" href="#">Report this job</a>
          </p>
          <div class="remodal us-modal" data-remodal-id="report_job_modal">
          <h3 class="pb">Report this Job</h3>
          <span class="pb bloc">Once a job has been reported, we will investigate it further. If you require a response, submit your question or concern to our</span>
          <a target="_blank" class="link-cta" href="https://www.fuzeqna.com/careerbuilder/consumer/question.asp">Trust and Site Security Team</a>
          <form id="report-job-form" class="job-alert form-material" action="/jobs/report" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓">
          <div class="field select">
          <label class="form-lab" for="report_type">Select Report Type</label>
          <select name="report_type" id="report_type" type="select"><option value="cantap">Cannot apply/broken link</option>
          <option value="charge">Fee or investment required</option>
          <option value="muljob">Multiple positions in one posting</option>
          <option value="notkey">Irrelevant/Excessive keywords</option>
          <option value="offens">Offensive content</option>
          <option value="other">Other</option>
          <option value="scam">Possible Scam</option></select>
          </div>
          <div class="field bloc">
          <label class="form-lab" for="comments">Provide additional details here.</label>
          <textarea name="comments" id="comments"></textarea>
          </div>
          <div class="clear bloc">
          <input type="submit" name="commit" value="Continue" class="btn btn-linear btn-linear-blue fl-r btn-width small-fa">
          <a class="btn btn-naked fl-r negative" data-remodal-action="close">Cancel</a>
          </div>
          <input type="hidden" name="job_did" id="job_id_report_job" value="j3s47h6b1wly925glvg">
          </form>

          </div>

          <p class="seperate-bottom normal">Job ID: 5000578797506</p>
          <h3 class="pb">CAREERBUILDER TIP</h3>
          <p>
          For your
          <a href="https://www.careerbuilder.com/privacy">privacy and protection</a>,
          <span>when applying to a job online, never give your social security number to a prospective employer, provide credit card or bank account information, or perform any sort of monetary transaction.</span>
          <a href="https://www.careerbuilder.com/privacy">Learn more.</a>
          </p>
          <p>
          By applying to a job using CareerBuilder you are agreeing to comply with and be subject to the CareerBuilder
          <a href="https://www.careerbuilder.com/terms">Terms and Conditions</a>
          for use of our website. To use our website, you must agree with the
          <a href="https://www.careerbuilder.com/terms">Terms and Conditions</a>
          and both meet and comply with their provisions.
          </p>
          </div>
          </div>
        </div>-->
			</div>
		</div>
	</div>
	<script src="/js/create_form.js"></script>
</body>
</html>
