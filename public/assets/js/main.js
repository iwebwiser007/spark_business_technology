// hamburger button work
document.getElementById("hamburger-btn").addEventListener("click", function () {
  document.getElementById("sidebar").classList.toggle("active");

  document.getElementById("main-content").classList.toggle("sidebar-active");
});

// header toggle active
document.getElementById("hamburger-btn").addEventListener("click", function () {
  document.getElementById("header").classList.toggle("active");

  document.getElementById("header").classList.toggle("header-active");
});

// main-content toggle active
document.getElementById("hamburger-btn").addEventListener("click", function () {
  document.getElementById("main-right-container").classList.toggle("active");

  document
    .getElementById("main-right-container")
    .classList.toggle("main-right-container-active");
});

// header hamburger button icon change
const bar = document.getElementById("bar-btn");
const sidebar = document.getElementById("sidebar");
const iconPath = document.getElementById("icon_path");

document.getElementById("hamburger-btn").addEventListener("click", function () {
  if (sidebar.classList.contains("active")) {
    iconPath.setAttribute(
      "d",
      "m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"
    ); // Cross icon
  } else {
    iconPath.setAttribute(
      "d",
      "M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"
    ); // Hamburger icon
  }
});

// add subheading button 1
// const table = document.getElementById("sub_table_tr");
// const sub = document.getElementById("add_subheading");
// table.style.display = "none";
// const subBtn = document.getElementById("direction-3");
// let show = false;

// sub.addEventListener("click", function () {
//   if (show) {
//     table.style.display = "none";
//     subBtn.style.transform = "rotate(0deg)";
//   } else {
//     table.style.display = "table-row";
//     table.querySelector(".sub_table").style.width = "100%";
//     subBtn.style.transform = "rotate(90deg)";
//   }
//   show = !show;
// });

// add subheading button 2
// const table1 = document.getElementById("sub_table_tr1");
// const sub1 = document.getElementById("add_subheading1");
// table1.style.display = "none";
// let show1 = false;
// const subBtn1 = document.getElementById("direction-4");
// sub1.addEventListener("click", function () {
//   if (show1) {
//     table1.style.display = "none";
//     subBtn1.style.transform = "rotate(0deg) ";
//   } else {
//     table1.style.display = "table-row";
//     table1.querySelector(".sub_table1").style.width = "100%";
//     subBtn1.style.transform = "rotate(90deg) ";
//   }
//   show1 = !show1;
// });

// Sidebar header arrow direction work
const icon = document.getElementById("direction-header");
let isRotated = false;
document
  .getElementById("has-dropdown-header")
  .addEventListener("click", function () {
    if (isRotated) {
      icon.style.transform = "rotate(0deg)";
    } else {
      icon.style.transform = "rotate(180deg) ";
    }
    isRotated = !isRotated;
  });

// Sidebar banner arrow direction work
const icon2 = document.getElementById("direction-banner");
let isRotated2 = false;
document
  .getElementById("has-dropdown-banner")
  .addEventListener("click", function () {
    if (isRotated2) {
      icon2.style.transform = "rotate(0deg)";
    } else {
      icon2.style.transform = "rotate(180deg) ";
    }
    isRotated2 = !isRotated2;
  });

// Social arrow direction work
// const social = document.getElementById("direction-social");
// let isRotated5 = false;
// document
//   .getElementById("has-dropdown-social")
//   .addEventListener("click", function () {
//     if (isRotated5) {
//       social.style.transform = "rotate(0deg)";
//     } else {
//       social.style.transform = "rotate(180deg) ";
//     }
//     isRotated5 = !isRotated5;
//   });

// feedback arrow direction work
const feedback = document.getElementById("direction-feedback");
let isRotated6 = false;
document
  .getElementById("has-dropdown-feedback")
  .addEventListener("click", function () {
    if (isRotated6) {
      feedback.style.transform = "rotate(0deg)";
    } else {
      feedback.style.transform = "rotate(180deg) ";
    }
    isRotated6 = !isRotated6;
  });

// client arrow direction work
const Client = document.getElementById("direction-client");
let isRotated7 = false;
document
  .getElementById("has-dropdown-client")
  .addEventListener("click", function () {
    if (isRotated7) {
      Client.style.transform = "rotate(0deg)";
    } else {
      Client.style.transform = "rotate(180deg) ";
    }
    isRotated7 = !isRotated7;
  });

// blog arrow direction work
const blog = document.getElementById("direction-blog");
let isRotated8 = false;
document
  .getElementById("has-dropdown-blog")
  .addEventListener("click", function () {
    if (isRotated8) {
      blog.style.transform = "rotate(0deg)";
    } else {
      blog.style.transform = "rotate(180deg) ";
    }
    isRotated8 = !isRotated8;
  });

// technology arrow direction work
const technology = document.getElementById("direction-stack");
let isRotated9 = false;
document
  .getElementById("has-dropdown-stack")
  .addEventListener("click", function () {
    if (isRotated9) {
      technology.style.transform = "rotate(0deg)";
    } else {
      technology.style.transform = "rotate(180deg) ";
    }
    isRotated9 = !isRotated9;
  });

// branches arrow direction work
const branches = document.getElementById("direction-branch");
let isRotated10 = false;
document
  .getElementById("has-dropdown-branch")
  .addEventListener("click", function () {
    if (isRotated10) {
      branches.style.transform = "rotate(0deg)";
    } else {
      branches.style.transform = "rotate(180deg) ";
    }
    isRotated10 = !isRotated10;
  });

// services arrow direction work
const services = document.getElementById("direction-services");
let isRotated11 = false;
document
  .getElementById("has-dropdown-services")
  .addEventListener("click", function () {
    if (isRotated11) {
      services.style.transform = "rotate(0deg)";
    } else {
      services.style.transform = "rotate(180deg) ";
    }
    isRotated11 = !isRotated11;
  });

// Industry arrow direction work
const industries = document.getElementById("direction-industries");
let isRotated12 = false;
document
  .getElementById("has-dropdown-industries")
  .addEventListener("click", function () {
    if (isRotated12) {
      industries.style.transform = "rotate(0deg)";
    } else {
      industries.style.transform = "rotate(180deg) ";
    }
    isRotated12 = !isRotated12;
  });

// certificate arrow direction work
const certificate = document.getElementById("direction-certificate");
let isRotated13 = false;
document
  .getElementById("has-dropdown-certificate")
  .addEventListener("click", function () {
    if (isRotated13) {
      certificate.style.transform = "rotate(0deg)";
    } else {
      certificate.style.transform = "rotate(180deg) ";
    }
    isRotated13 = !isRotated13;
  });

// case arrow direction work
const casestudy = document.getElementById("direction-case");
let isRotated14 = false;
document
  .getElementById("has-dropdown-case")
  .addEventListener("click", function () {
    if (isRotated14) {
      casestudy.style.transform = "rotate(0deg)";
    } else {
      casestudy.style.transform = "rotate(180deg) ";
    }
    isRotated14 = !isRotated14;
  });

// Initialize Edit tooltips
var tooltipTriggerList = [].slice.call(
  document.querySelectorAll('[data-bs-toggle="edit"]')
);
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl);
});

// Initialize Delete tooltips
var tooltipTriggerList = [].slice.call(
  document.querySelectorAll('[data-bs-toggle="delete"]')
);
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl);
});

// Initialize View tooltips
var tooltipTriggerList = [].slice.call(
  document.querySelectorAll('[data-bs-toggle="view"]')
);
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl);
});

// add new button link start here
function addButtonLink() {
  var ButtonLink = document.getElementById("addButtonLink");

  var newButtonLink = `<div
                                class="row form-group"
                              >
                                <!-- button Link label start here  -->
                                <div
                                  class="col-12 col-md-4 "
                                >
                                  
                                </div>
                                <!-- button Link label end here  -->

                                <!-- button Link input start here  -->
                                <div class="col-12 col-md-8 mt-0">
                                  <div class=" d-flex">
                                    <input
                                      type="text"
                                      id="btnLink"
                                      class="form-control form-control-lg form-input"
                                      placeholder="Enter Link..."
                                      required
                                    />
                                    <a
                                      href="#addButtonLink"
                                      class="btn mb-2 float-left"
                                      onclick="addButtonLink()"
                                    >
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20" fill="#5f6368"><path d="m291-240-51-51 189-189-189-189 51-51 189 189 189-189 51 51-189 189 189 189-51 51-189-189-189 189Z"/></svg>
                                    </a>
                                  </div>
                                </div>
                                 <!-- button Link input end here  -->
                              </div>`;

  // Insert the new input and button
  ButtonLink.insertAdjacentHTML("beforeend", newButtonLink);
}

// phase title work
function addInput1() {
  var container1 = document.getElementById("phase_title");

  var newInput1 = `<div
                                class="row form-group"
                              >
                                <!-- Phase Title label start here  -->
                                <div
                                  class="col-12 col-md-4"
                                >
                                 
                                </div>
                                <!-- Phase Title label end here  -->

                                <!-- Phase Title input start here  -->
                                <div class="col-12 col-md-8 mt-0">
                                  <div class="d-flex">
                                    <input
                                      type="text"
                                      id="phaseTitle"
                                      class="form-control form-control-lg form-input"
                                      placeholder="Enter Phase Title..."
                                      required
                                    />
                                    <a
                                      href="#phase_title"
                                      class="btn mb-2"
                                      onclick="addInput1()"
                                    >
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20" fill="#5f6368"><path d="m291-240-51-51 189-189-189-189 51-51 189 189 189-189 51 51-189 189 189 189-51 51-189-189-189 189Z"/></svg>
                                    </a>
                                  </div>
                                </div>
                                <!-- Phase Title input end here  -->
                              </div>`;

  // Insert the new input and button
  container1.insertAdjacentHTML("beforeend", newInput1);
}

// phase Feature work
function addInput2() {
  var container2 = document.getElementById("phase_feature");

  var newInput2 = `<div
                                class="row form-group mt-0"
                              >
                                <!-- Sub-header Link label start here  -->
                                <div
                                  class="col-12 col-md-4"
                                >
                                  
                                </div>
                                <!-- Sub-header Link label end here  -->

                                <!-- Sub-header Link input start here  -->
                                <div class="col-12 col-md-8 mt-0">
                                  <div class="sub-input d-flex">
                                    <input
                                      type="text"
                                      id="inputLink"
                                      class="form-control form-control-lg form-input"
                                      placeholder="Enter Phase Feature..."
                                      list="subheader-link"
                                      id="subheader-link"
                                      required
                                    />
                                    <a
                                      href="#phase_feature"
                                      class="btn mb-2 float-left"
                                      onclick="addInput2()"
                                    >
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20" fill="#5f6368"><path d="m291-240-51-51 189-189-189-189 51-51 189 189 189-189 51 51-189 189 189 189-51 51-189-189-189 189Z"/></svg>
                                    </a>
                                  </div>
                                </div>
                                <!-- Sub-header Link input end here  -->
                              </div>`;

  // Insert the new input and button
  container2.insertAdjacentHTML("beforeend", newInput2);
}

// Add new header title/Link
function header() {
  var headerTitle = document.getElementById("headerTitle");

  var newInput5 = `<!-- header title/Link start here  -->
                          <div class="row form-group mt-1 mt-md-2 align-items-start">
                            <!-- Header title label start here  -->
                            <div class="col-12 col-md-2">
                              <label
                                for="inputHeaderTitle"
                                class="col-form-label form-label d-flex justify-content-start justify-content-md-center mb-0 mb-md-3"
                                >Header Title / Link
                              </label>
                            </div>
                            <!-- Header title label end here  -->

                            <!-- Header title input start here  -->
                            <div class="col-12 col-md-9 mt-0
                            ">
                                <div class="input-group mb-3 pb-4 position-relative">
                                <input type="text" class="form-control" id="header-link" placeholder="Enter Header title..." aria-label="title">
                                <input type="text" class="form-control rounded-end" id="header-link" placeholder="Enter Header link" aria-label="link">
                                <span
                                  class="text-danger position-absolute bottom-0 ms-1 d-none d-sm-block"
                                  >New Heading Title/ Link added.</span
                                >
                                <div class="valid-feedback">Looks good!</div>
                              </div>
                              
                             <!-- Add Subheader button start here   -->
                              <a
                              href="#subHeaderTitle"
                              role="button"
                              class="btn btn-outline-secondary bg-white text-secondary btn-sm mb-2 px-2"
                              onclick="subHeader()"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                height="20"
                                viewBox="0 -960 960 960"
                                width="20"
                                fill="#5f6368"
                              >
                                <path
                                  d="M444-444H240v-72h204v-204h72v204h204v72H516v204h-72v-204Z"
                                />
                              </svg>
                              Sub Heading
                            </a>
                            <!-- Add Subheader button end here  -->
                            </div>
                            <!-- Header title input end here  -->

                            <!-- header title plus button start here  -->
                            <div class="col-1 col-md-1 d-none d-sm-block"></div>
                            <!-- header title plus button end here  -->
                          </div>
                          <!-- header title/Link end here  -->
                          
                          `;

  // Insert the new input and button
  headerTitle.insertAdjacentHTML("beforeend", newInput5);
}

// add new subheader Title/ Link
function subHeader() {
  var subHeaderLink = document.getElementById("subHeader");

  var newSubLink = `<div class="row form-group mt-1 mt-md-2 align-items-start">
                            <!-- Header title label start here  -->
                            <div class="col-12 col-md-2">
                              <label
                                for="inputHeaderTitle"
                                class="col-form-label form-label d-flex justify-content-start justify-content-md-center mb-0 mb-md-3"
                                >Sub Header Title / Link
                              </label>
                            </div>
                            <!-- Header title label end here  -->

                            <!-- Header title input start here  -->
                            <div class="col-10 col-md-9 mt-0
                            ">
                                <div class="input-group mb-3 pb-4 position-relative">
                                <input type="text" class="form-control" id="header-link" placeholder="Enter Sub Header title..." aria-label="title">
                                <input type="text" class="form-control rounded-end" id="header-link" placeholder="Enter Sub Header link" aria-label="link">
                                <span
                                  class="text-danger position-absolute bottom-0 ms-1 d-none d-sm-block"
                                  >New Sub Heading Title/Link added.</span
                                >
                                <div class="valid-feedback">Looks good!</div>
                              </div>
                              
                             
                            </div>
                            <!-- Header title input end here  -->

                            <!-- header title plus button start here  -->
                            <div class="col-2 col-md-1">
                               <!-- add button start here  -->
                               <a
                               href="#headerTitle"
                               role="button"
                               class="btn"
                               onclick="header()"
                             >
                               <svg
                                 xmlns="http://www.w3.org/2000/svg"
                                 height="20"
                                 viewBox="0 -960 960 960"
                                 width="20"
                                 fill="#5f6368"
                               >
                                 <path
                                   d="M444-444H240v-72h204v-204h72v204h204v72H516v204h-72v-204Z"
                                 />
                               </svg>
                             </a>
                             <!-- add button end here  -->

                            </div>
                            <!-- header title plus button end here  -->
                          </div>
                          <div id="headerTitle"></div>`;

  // Insert the new input and button
  subHeaderLink.insertAdjacentHTML("beforeend", newSubLink);
}

// function subHeader1() {
//   var subHeaderLink = document.getElementById("subHeader");

//   var newSubLink = `<div class="row form-group mt-1 mt-md-2 align-items-start">
//                             <!-- Header title label start here  -->
//                             <div class="col-12 col-md-2">
//                               <label
//                                 for="inputHeaderTitle"
//                                 class="col-form-label form-label d-flex justify-content-start justify-content-md-center mb-0 mb-md-3"
//                                 >Sub Header Title / Link
//                               </label>
//                             </div>
//                             <!-- Header title label end here  -->

//                             <!-- Header title input start here  -->
//                             <div class="col-12 col-md-9 mt-0
//                             ">
//                                 <div class="input-group mb-3 pb-4 position-relative">
//                                 <input type="text" class="form-control" id="header-link" placeholder="Enter Sub Header title..." aria-label="title">
//                                 <input type="text" class="form-control rounded-end" id="header-link" placeholder="Enter Sub Header link" aria-label="link">
//                                 <span
//                                   class="text-danger position-absolute bottom-0 ms-1 d-none d-sm-block"
//                                   >New Sub Heading Title/Link added.</span
//                                 >
//                                 <div class="valid-feedback">Looks good!</div>
//                               </div>

//                             </div>
//                             <!-- Header title input end here  -->

//                             <!-- header title plus button start here  -->
//                             <div class="col-1 col-md-1 d-none d-sm-block">
//                                <!-- add button start here  -->
//                                <a
//                                href="#headerTitle"
//                                role="button"
//                                class="btn"
//                                onclick="header()"
//                              >
//                                <svg
//                                  xmlns="http://www.w3.org/2000/svg"
//                                  height="20"
//                                  viewBox="0 -960 960 960"
//                                  width="20"
//                                  fill="#5f6368"
//                                >
//                                  <path
//                                    d="M444-444H240v-72h204v-204h72v204h204v72H516v204h-72v-204Z"
//                                  />
//                                </svg>
//                              </a>
//                              <!-- add button end here  -->

//                             </div>
//                             <!-- header title plus button end here  -->
//                           </div>
//                           <div id="headerTitle"></div>`;

//   // Insert the new input and button
//   subHeaderLink.insertAdjacentHTML("beforeend", newSubLink);
// }

// sidebar close button for mobile size

document.getElementById("closeBtn").addEventListener("click", function () {
  document.getElementById("sidebar").style.width = "0";
  document.getElementById("sidebar").style.display = "none";
});

// hamburger button for mobile size work
document
  .getElementById("hamburger-btn1")
  .addEventListener("click", function () {
    document.getElementById("sidebar").classList.toggle("active");
    document.getElementById("main-content").classList.toggle("sidebar-active");

    document.getElementById("header").classList.toggle("active");
    document.getElementById("header").classList.toggle("header-active");

    document.getElementById("main-right-container").classList.toggle("active");
    document
      .getElementById("main-right-container")
      .classList.toggle("main-right-container-active");
  });











  