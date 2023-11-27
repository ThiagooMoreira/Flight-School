var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

const counts = document.querySelectorAll('.count')
const speed = 97
  
  counts.forEach((counter) => {
      function upDate(){
          const target = Number(counter.getAttribute('data-target'))
          const count = Number(counter.innerText)
          const inc = target / speed        
          if(count < target){
              counter.innerText = Math.floor(inc + count) 
              setTimeout(upDate, 15)
          }else{
              counter.innerText = target
          }
      }
      upDate()
  })
  AOS.init({
    duration: 1000,
    delay: 100,
  });

  const faqs = document.querySelectorAll(".faq");

  faqs.forEach((faq) => {
      faq.addEventListener("click", () => {
          faq.classList.toggle("active");
      });
  });
  
function showPopup(event) {
  alert("Thanks for joining our waiting list, you can check your name on the Students page ;D");
}

function showPopup1(event) {
  alert("Thanks for joining our Newsletter ;)");
}
  function myFunction() {
      var x = document.getElementById("mySelect").value;
      document.getElementById("display").innerHTML = x;
  }
  function myFunction1() {
      var y = document.getElementById("mySelect1").value;
      document.getElementById("display").innerHTML = y;
  }
  function myFunction2() {
      var j = document.getElementById("mySelect2").value;
      document.getElementById("display").innerHTML = j;
  }
  function myFunction3() {
      var z = document.getElementById("mySelect3").value;
      document.getElementById("display").innerHTML = z;
  }

