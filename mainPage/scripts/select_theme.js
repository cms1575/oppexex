/* TEMPLATE SELECTION */
let check1 = document.querySelector("#form-check-input-1");
let check2 = document.querySelector("#form-check-input-2");
let check3 = document.querySelector("#form-check-input-3");
let template_selection;
check1.addEventListener("click", () => {
   if (check1.checked) {
      check2.checked = false;
      check3.checked = false;
      template_selection = 1;
   }
});
check2.addEventListener("click", () => {
   if (check2.checked) {
      check1.checked = false;
      check3.checked = false;
      template_selection = 2;
   }
});
check3.addEventListener("click", () => {
   if (check3.checked) {
      check1.checked = false;
      check2.checked = false;
      template_selection = 3;
   }
});

/* INPUT FORMS */
let user_name = document.querySelector("#name-input");
let profile_thumb = document.querySelector("#profile-thumb-input");
let occupation = document.querySelector("#occupation-input");
let intro = document.querySelector("#intro-input");

let phone = document.querySelector("#phone-input");
let email = document.querySelector("#email-input");
let github = document.querySelector("#github-input");

let timelines = [];
let tl_title = document.querySelector("#timeline-title-input");
let tl_desc = document.querySelector("#timeline-desc-input");
let tl_sub = document.querySelector("#timeline-subtitle-input");
let tl_body = document.querySelector("#timeline-body-input");

let images = [];
let image = document.querySelector("#image-input");
let image_desc = document.querySelector("#image-desc-input");

let tl_submitButton = document.querySelector(".submit-btn");
tl_submitButton.addEventListener("click", () => {
   // TODO: empty input control
   let new_tl = {
      title: tl_title.value,
      desc: tl_desc.value,
      sub: tl_sub.value,
      body: tl_body.value,
   };
   console.log("New timeline element added: ", new_tl);
   timelines.push(new_tl);
});

/* HTML GENERATION */
const fs = require("fs");
let selected_template;
let targetDoc;
function HTMLGenerator() {
   // copy the selected template
   switch (template_selection) {
      case 1:
         fs.copyFile("../templates/1", "../outputPage", (err) => {
            if (err) throw err;
            console.log("first template copied");
         });
      case 2:
         fs.copyFile("../templates/2", "../outputPage", (err) => {
            if (err) throw err;
            console.log("second template copied");
         });
      case 3:
         fs.copyFile("../templates/3", "../outputPage", (err) => {
            if (err) throw err;
            console.log("third template copied");
         });
   }
}

/* INFO HANDLER */
function infoHandler() {
   targetDoc.querySelector("#name").text = user_name.value;
   targetDoc.querySelector("#occupation").text = occupation.value;
   targetDoc.querySelector("#intro").text = intro.value;
   targetDoc.querySelector("#phone").text = phone.value;
   targetDoc.querySelector("#e-mail").text = email.value;
   targetDoc.querySelector("#github").text = github.value;
}

/* TIMELINE HANDLER */
function timelineHandler() {
   let tl_target = targetDoc.querySelector("#timelineElem");

   // targetDoc에 엘레먼트 추가
   // TODO: template에 타임라인이랑 이미지 섹션 id 한번 더 통일하기
}

function imagesHandler() {}

/* PUBLISH */
let publishButton = document.querySelector(".complete-btn");
publishButton.addEventListener("click", () => {
   // TODO: empty input control

   HTMLGenerator();

   infoHandler();
   timelineHandler();
});

/* to check */
console.log(
   user_name,
   profile_thumb,
   occupation,
   intro,
   phone,
   email,
   github,
   tl_title,
   tl_desc,
   tl_sub,
   tl_body,
   submitButton,
   publishButton
);
