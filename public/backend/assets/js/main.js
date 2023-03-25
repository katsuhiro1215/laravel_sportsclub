"use strict";
/*******************************
 *  メニュー開閉
******************************** */
function menuToggle() {
  const toggle = document.querySelector('.menu-toggle');
  const navigation = document.querySelector('.l-sidebar');
  const main = document.querySelector('.l-main');
  
  if (toggle) {
      toggle.addEventListener("click", function() {
      navigation.classList.toggle('active');
      main.classList.toggle('active');
    });
  }
}
menuToggle();

/*******************************
 *  ドロップダウン jQuery
******************************** */
$(document).ready(function() {
  $('.menu-open').click(function() {
    $(this).next('.child-nav').slideToggle();
    $(this).find('.pull-right-container').toggleClass('rotate');
  });
});

/*******************************
 *  画像検知
******************************** */
$(document).ready(function () {
  $('#image').change(function(e) {
    let reader = new FileReader();
    reader.onload = function(e) {
      $('#showImage').attr('src', e.target.result);
    }
    reader.readAsDataURL(e.target.files['0']);
  });
})

/*******************************
 *  郵便番号から住所取得(API)
******************************** */
function zipcode() {
  let search = document.getElementById('search');
  if(search) {
    search.addEventListener('click', ()=>{
        
        let api = 'https://zipcloud.ibsnet.co.jp/api/search?zipcode=';
        let error = document.getElementById('error');
        let input = document.getElementById('zipcode');
        let address1 = document.getElementById('address1');
        let address2 = document.getElementById('address2');
        let address3 = document.getElementById('address3');
        let param = input.value.replace("-",""); //入力された郵便番号から「-」を削除
        let url = api + param;
        
        fetchJsonp(url, {
            timeout: 10000, //タイムアウト時間
        })
        .then((response)=>{
            error.textContent = ''; //HTML側のエラーメッセージ初期化
            return response.json();  
        })
        .then((data)=>{
            if(data.status === 400){ //エラー時
                error.textContent = data.message;
            }else if(data.results === null){
                error.textContent = '郵便番号から住所が見つかりませんでした。';
            } else {
                address1.value = data.results[0].address1;
                address2.value = data.results[0].address2;
                address3.value = data.results[0].address3;
            }
        })
        .catch((ex)=>{ //例外処理
            console.log(ex);
        });
      }, false);
  }
}
zipcode();


/*******************************
 *  右のサイドバー開閉
******************************** */
function styleSwitcherToggle() {
  const controlSidebar = document.querySelector(".js-control-sidebar"),
  controlToggler = document.querySelector(".js-control-toggle");

  if(controlToggler) {
    controlToggler.addEventListener("click", function() {
      controlSidebar.classList.toggle("open");
      this.querySelector("i").classList.toggle("fa-times");
      this.querySelector("i").classList.toggle("fa-cog");
    });
  }
}
styleSwitcherToggle();

// Theme Color
// function themeColors() {
//   const colorStyle = document.querySelector(".js-color-style"),
//   themeColorsContainer = document.querySelector(".js-theme-colors");

//   themeColorsContainer.addEventListener("click", ({target}) => {
//     if(target.classList.contains("js-theme-color-item")) {
//       localStorage.setItem("color", target.getAttribute("data-js-theme-color"));
//       setColor();
//     }
//   });
//   function setColor() {
//     let path = colorStyle.getAttribute("href").split("/");
//     path = path.slice(0, path.length-1);
//     colorStyle.setAttribute("href", path.join("/assets/") + "/" + localStorage.getItem("color") + ".css");
  
//     if(document.querySelector(".js-theme-color-item.active")) {
//       document.querySelector(".js-theme-color-item.active").classList.remove("active");
//     }
  
//     if(localStorage.getItem("color") !== null) {
//       setColor();
//     }
//     else {
//       const defaultColor = colorStyle.getAttribute("href").split("/").pop().split(".").shift();
//       document.querySelector("[data-js-theme-color=" + defaultColor + "]").classList.add("active");
//     }
//   }
// }
// themeColors();

/****** CKE Editor ******/
function postEditor() {
  const editor = document.getElementById("post-editor");
  if (editor !== null) {
    ClassicEditor.create(editor);
  }
}
postEditor();

// Sweet Alert
function deletePost(e) {
  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success'
      )
      document.getElementById('delete_' + e.dataset.id).submit();
    }
  })
}

// jQuery Toastr
$(document).ready(function () {
  $(".tst1").on("click", function () {

    toastr["success"]("My name is Inigo Montoya. You killed my father. Prepare to die!")

    toastr.options = {
      "closeButton": false,
      "debug": false,
      "newestOnTop": false,
      "progressBar": false,
      "positionClass": "toast-top-right",
      "preventDuplicates": false,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut",
      "backgroundColor": "success"
    }

  });

});






