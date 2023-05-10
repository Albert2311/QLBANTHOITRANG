<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   <!--- <title>Alert Box | CodingLab </title>----->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
   </head>
<style>

     @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
  }
  .alert_box,
  .show_button{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50% , -50%);
  }
  .show_button{
    height: 55px;
    padding: 0 30px;
    font-size: 20px;
    font-weight: 400;
    cursor: pointer;
    outline: none;
    border: none;
    color: #fff;
    line-height: 55px;
    background: #2980b9;
    border-radius: 5px;
    transition: all 0.3s ease;
  }
  .show_button:hover{
    background: #2573a7;
  }
  .background{
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.5);
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s ease;
  }
  .alert_box{
    padding: 30px;
    display: flex;
    background: #fff;
    flex-direction: column;
    align-items: center;
    text-align: center;
    max-width: 450px;
    width: 100%;
    border-radius: 5px;
    z-index: 5;
    opacity: 0;
    pointer-events: none;
    transform: translate(-50% , -50%) scale(0.97);
    transition: all 0.3s ease;
  }
  #check:checked ~ .alert_box{
    opacity: 1;
    pointer-events: auto;
    transform: translate(-50% , -50%) scale(1);
  }
  #check:checked ~ .background{
    opacity: 1;
    pointer-events: auto;
  }
  #check{
    display: none;
  }
  .alert_box .icon{
    height: 100px;
    width: 100px;
    color: #f23b26;
    border: 3px solid #f23b26;
    border-radius: 50%;
    line-height: 97px;
    font-size: 50px;
  }
  .alert_box header{
    font-size: 35px;
    font-weight: 500;
    margin: 10px 0;
  }
  .alert_box p{
    font-size: 20px;
  }
  .alert_box .btns{
    margin-top: 20px;
  }
  .btns label{
    display: inline-flex;
    height: 55px;
    padding: 0 30px;
    font-size: 20px;
    font-weight: 400;
    cursor: pointer;
    line-height: 55px;
    outline: none;
    margin: 0 10px;
    border: none;
    color: #fff;
    border-radius: 5px;
    transition: all 0.3s ease;
  }
  .btns label:first-child{
    background: #2980b9;
  }
  .btns label:first-child:hover{
    background: #2573a7;
  }
  .btns label:last-child{
    background: #f23b26;
  }
  .btns label:last-child:hover{
    background: #d9210d;
  }

  /*  */
  @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
  *{
    margin: 0;
    padding: 0;
    user-select: none;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
  }
  html,body{
    height: 100%;
  }
  body{
    display: grid;
    place-items: center;
    overflow: hidden;
  }
  button{
    padding: 8px 16px;
    font-size: 25px;
    font-weight: 500;
    border-radius: 4px;
    border: none;
    outline: none;
    background: #e69100;
    color: white;
    letter-spacing: 1px;
    cursor: pointer;
  }
  .alert{
    background: #ffdb9b;
    padding: 20px 40px;
    min-width: 420px;
    position: absolute;
    right: 0;
    top: 10px;
    border-radius: 4px;
    border-left: 8px solid #ffa502;
    overflow: hidden;
    opacity: 0;
    pointer-events: none;
  }
  .alert.showAlert{
    opacity: 1;
    pointer-events: auto;
  }
  .alert.show{
    animation: show_slide 1s ease forwards;
  }
  @keyframes show_slide {
    0%{
      transform: translateX(100%);
    }
    40%{
      transform: translateX(-10%);
    }
    80%{
      transform: translateX(0%);
    }
    100%{
      transform: translateX(-10px);
    }
  }
  .alert.hide{
    animation: hide_slide 1s ease forwards;
  }
  @keyframes hide_slide {
    0%{
      transform: translateX(-10px);
    }
    40%{
      transform: translateX(0%);
    }
    80%{
      transform: translateX(-10%);
    }
    100%{
      transform: translateX(100%);
    }
  }
  .alert .fa-exclamation-circle{
    position: absolute;
    left: 20px;
    top: 50%;
    transform: translateY(-50%);
    color: #ce8500;
    font-size: 30px;
  }
  .alert .msg{
    padding: 0 20px;
    font-size: 18px;
    color: #ce8500;
  }
  .alert .close-btn{
    position: absolute;
    right: 0px;
    top: 50%;
    transform: translateY(-50%);
    background: #ffd080;
    padding: 20px 18px;
    cursor: pointer;
  }
  .alert .close-btn:hover{
    background: #ffc766;
  }
  .alert .close-btn .fas{
    color: #ce8500;
    font-size: 22px;
    line-height: 40px;
  }
</style>

<body>
    <div class="container">
      <input type="checkbox" id="check">
      <label class="show_button" for="check">Click Me</label>
      <div class="background"></div>
      <div class="alert_box">
        <div class="icon">
          <i class="fas fa-exclamation"></i>
        </div>
        <header>Confirm</header>
        <p>Are you sure want to permanently delete this Photo?</p>
        <div class="btns">
          <label for="check">Yes, Delete!</label>
          <label for="check">Cancel</label>
        </div>
      </div>
    </div>
</body>
</html>

      <button>Show Alert</button>
      <div class="alert hide">
         <span class="fas fa-exclamation-circle"></span>
         <span class="msg">Warning: This is a warning alert!</span>
         <div class="close-btn">
            <span class="fas fa-times"></span>
         </div>
      </div>
      <script>
         $('button').click(function(){
           $('.alert').addClass("show");
           $('.alert').removeClass("hide");
           $('.alert').addClass("showAlert");
           setTimeout(function(){
             $('.alert').removeClass("show");
             $('.alert').addClass("hide");
           },5000);
         });
         $('.close-btn').click(function(){
           $('.alert').removeClass("show");
           $('.alert').addClass("hide");
         });
      </script>
   </body>
</html>