<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Secure Login | সাপ্তাহিক আজকাল :: Weekly Ajkal</title>
    <meta charset="utf-8" />
    <meta
      name="description"
      content="বাংলাদেশ ও বিশ্বসংবাদ সম্পর্কে সর্বশেষ আপডেট জানুন। এখানে পাবেন খেলাধুলা, রাজনীতি, চাকরি, বিনোদন, স্বাস্থ্য, লাইফস্টাইল এবং আরও অনেক কিছু।"
    />
    <meta
      name="keywords"
      content="news, update, latest news, weekly ajkal, ajkal, Bangladesh, News update"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta name="robots" content="max-image-preview:large" />
    <meta name="googlebot" content="noindex, nofollow" />
    <meta name="description" content="সাপ্তাহিক আজকাল :: Weekly Ajkal - সর্বশেষ খবর এবং আপডেট" />
    <meta name="robots" content="index, follow" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.ajkal.us/" />
    <meta property="og:title" content="সাপ্তাহিক আজকাল :: Weekly Ajkal" />
    <meta property="og:description" content="বাংলাদেশ ও বিশ্বসংবাদ সম্পর্কে সর্বশেষ আপডেট জানুন। এখানে পাবেন খেলাধুলা, রাজনীতি, চাকরি, বিনোদন, স্বাস্থ্য, লাইফস্টাইল এবং আরও অনেক কিছু।"/>
    <meta property="og:image" content="https://ajkal.us/img/settings/placeholder.jpg"/>
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="সাপ্তাহিক আজকাল :: Weekly Ajkal" />
    <meta name="twitter:description" content="বাংলাদেশ ও বিশ্বসংবাদ সম্পর্কে সর্বশেষ আপডেট জানুন। এখানে পাবেন খেলাধুলা, রাজনীতি, চাকরি, বিনোদন, স্বাস্থ্য, লাইফস্টাইল এবং আরও অনেক কিছু।"/>
    <meta name="twitter:image" content="https://ajkal.us/img/settings/placeholder.jpg"/>
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
  </head>
  <body id="kt_body" class="bg-body">
    <div class="d-flex flex-column flex-root">
      <div
        class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"
        style="background-image: url(assets/media/illustrations/sketchy-1/14.png);">
        <div
          class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20"
        >
          <a href="dashboard.html" class="mb-12">
            <img
              alt="Logo"
              src="https://i.ibb.co/6D35WjX/logo.png"
              class="h-40px"
            />
          </a>
          <div
            class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto"
          >
            <form
              class="form w-100"
              novalidate="novalidate"
              id="kt_sign_in_form"
              data-kt-redirect-url="dashboard.html"
              method="post"
              action="{{url('/login')}}"
            >
            @csrf
              <div class="text-center mb-10">
                <h1 class="text-dark mb-3">সাইন ইন করুন</h1>
              </div>
              <div class="fv-row mb-10">
                <label class="form-label fs-6 fw-bolder text-dark">ইমেইল</label>
                <input
                  class="form-control form-control-lg form-control-solid"
                  value=""
                  type="text"
                  name="email"
                  autocomplete="off"
                />
              </div>
              <div class="fv-row mb-10">
                <div class="d-flex flex-stack mb-2">
                  <label class="form-label fw-bolder text-dark fs-6 mb-0"
                    >পাসওয়ার্ড</label
                  >
                </div>
                <input
                  class="form-control form-control-lg form-control-solid"
                  value=""
                  type="password"
                  name="password"
                  autocomplete="off"
                />
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-lg btn-primary w-100 mb-5">submit</button>
              </div>
            </form>
          </div>
        </div>
        <div class="d-flex flex-center flex-column-auto p-10">
          <div class="d-flex align-items-center fw-bold fs-6">
            ২০২৪© সাপ্তাহিক আজকাল
          </div>
        </div>
      </div>
    </div>
    <script>
      var hostUrl = "assets/";
    </script>
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <script src="assets/js/custom/authentication/sign-in/general.js"></script>
  </body>
</html>
