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
$(function() {
  var Dialog = Swal.mixin({
    showConfirmButton: false,
    timer: 3000
  });

  $('.swalDefaultSuccess').click(function() {
    Dialog.fire({
      icon: 'success',
      title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
  });
  $('.swalDefaultInfo').click(function() {
    Dialog.fire({
      icon: 'info',
      title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
  });
  $('.swalDefaultError').click(function() {
    Dialog.fire({
      icon: 'error',
      title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
  });
  $('.swalDefaultWarning').click(function() {
    Dialog.fire({
      icon: 'warning',
      title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
  });
  $('.swalDefaultQuestion').click(function() {
    Dialog.fire({
      icon: 'question',
      title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
  });

  $('.toastrDefaultSuccess').click(function() {
    toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
  });
  $('.toastrDefaultInfo').click(function() {
    toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
  });
  $('.toastrDefaultError').click(function() {
    toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
  });
  $('.toastrDefaultWarning').click(function() {
    toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
  });

  $('.toastsDefaultDefault').click(function() {
    $(document).Toasts('create', {
      title: 'Toast Title',
      body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
  });
  $('.toastsDefaultTopLeft').click(function() {
    $(document).Toasts('create', {
      title: 'Toast Title',
      position: 'topLeft',
      body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
  });
  $('.toastsDefaultBottomRight').click(function() {
    $(document).Toasts('create', {
      title: 'Toast Title',
      position: 'bottomRight',
      body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
  });
  $('.toastsDefaultBottomLeft').click(function() {
    $(document).Toasts('create', {
      title: 'Toast Title',
      position: 'bottomLeft',
      body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
  });
  $('.toastsDefaultAutohide').click(function() {
    $(document).Toasts('create', {
      title: 'Toast Title',
      autohide: true,
      delay: 750,
      body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
  });
  $('.toastsDefaultNotFixed').click(function() {
    $(document).Toasts('create', {
      title: 'Toast Title',
      fixed: false,
      body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
  });
  $('.toastsDefaultFull').click(function() {
    $(document).Toasts('create', {
      body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
      title: 'Toast Title',
      subtitle: 'Subtitle',
      icon: 'fas fa-envelope fa-lg',
    })
  });
  $('.toastsDefaultFullImage').click(function() {
    $(document).Toasts('create', {
      body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
      title: 'Toast Title',
      subtitle: 'Subtitle',
      image: '../../dist/img/user3-128x128.jpg',
      imageAlt: 'User Picture',
    })
  });
  $('.toastsDefaultSuccess').click(function() {
    $(document).Toasts('create', {
      class: 'bg-success',
      title: 'Toast Title',
      subtitle: 'Subtitle',
      body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
  });
  $('.toastsDefaultInfo').click(function() {
    $(document).Toasts('create', {
      class: 'bg-info',
      title: 'Toast Title',
      subtitle: 'Subtitle',
      body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
  });
  $('.toastsDefaultWarning').click(function() {
    $(document).Toasts('create', {
      class: 'bg-warning',
      title: 'Toast Title',
      subtitle: 'Subtitle',
      body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
  });
  $('.toastsDefaultDanger').click(function() {
    $(document).Toasts('create', {
      class: 'bg-danger',
      title: 'Toast Title',
      subtitle: 'Subtitle',
      body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
  });
  $('.toastsDefaultMaroon').click(function() {
    $(document).Toasts('create', {
      class: 'bg-maroon',
      title: 'Toast Title',
      subtitle: 'Subtitle',
      body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
  });
});

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






