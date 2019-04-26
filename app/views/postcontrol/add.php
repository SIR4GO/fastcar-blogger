

<style>
    .row .sidebar
    {
        display: none;
    }
    .row
    {
        justify-content: center;  /* To make Margin Auto ==> to align center  horizontal in child elements*/
    }

     .color-edit
     {
         color:#3395FF ;
         font-weight: bold
     }
    .line
    {
        margin: auto auto 50px auto;
        text-align: center;
        width: 100% ;
    }
     .btnn
     {
         border: none ;
         background-color:#3395FF ;
         opacity: 0.8;
         color:#f7f7f7
     }
    .p-hidden
    {
        font-size: 18px ;
        margin: auto 0 auto 20px;
        font-weight: bold ;
        color: #3395FF ;
        display: none;
        font-family: Tahoma sans-serif;
    }



</style>


    <form  style="text-align: left ; direction: ltr" method="post" >

        <h1 class="color-edit line " style="">Control Panel </h1>
        <div class="form-group">
            <label for="exampleFormControlSelect1" class="color-edit">Post type</label>
            <select required name="post" class="form-control" id="exampleFormControlSelect1">
                <option value="accidents">accidents</option>
                <option value="advice">advice</option>
                <option value="cars">cars</option>
                <option value="exams">exams</option>
                <option value="learning">learning</option>
                <option value="wrongs">wrongs</option>
            </select>
        </div>

        <div class="form-group" style="direction: ltr">
            <label for="exampleUrl" class="color-edit">Top Photo Url </label>
            <input  name="url" type="url" class="form-control" id="exampleUrl" aria-describedby="UrlHelp" placeholder="Enter Photo Url">

            <div style="display:flex;">
                <input class="btnn" type="button" value="Check Image" id="btnStatus">
                <p class="p-hidden" id="wait">Waiting</p>
            </div>

            <small id="UrlHelp" class="form-text text-muted"> Recommended   780 x 600 px </small>
        </div>



        <div class="form-group rtl"  style="text-align: right" >

            <label for="exampletitle" class="color-edit "  > Post title </label>
            <input  required name="title"  type="text" class="form-control" id="exampletitle" aria-describedby="titleHelp" placeholder="Enter title">
            <small  style="text-align: left;" id="titleHelp" class="form-text text-muted">title not less on 20 characters </small>
        </div>



        <div class="form-group rtl " style="text-align: right" >
            <label for="exampleFormControlTextarea1" class="color-edit">Post Content</label>
            <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="20"></textarea>
        </div>



        <div class="form-group rtl " style="text-align: right;">
            <label for="examplesummary" class="color-edit"> Post summary </label>
            <input required name="summary" type="text" class="form-control" id="examplesummary" aria-describedby="summaryeHelp" placeholder="Enter summary ">
            <small style="text-align: left;" id="summaryHelp" class="form-text text-muted"> Recommended 30 characters </small>
        </div>



        <div class="form-group">
            <label for="exampleicon" class="color-edit"> Icon sidebar Url </label>
            <input required name="iconside" type="url" class="form-control" id="exampleicon" aria-describedby="iamgeHelp" placeholder="Enter icon Url 100 x 100 ">

            <div style="display:flex;">
                <input class="btnn" type="button" value="Check Image" id="btn2Status">
                <p class="p-hidden" id="wait2">Waiting</p>
            </div>

            <small id="imageHelp" class="form-text text-muted"> Don't exceed  100 x 100 pixels </small>
        </div>



        <div class="form-group">
            <label for="exampleimage" class="color-edit"> Icon main view Url </label>
            <input required name="iconmain" type="url" class="form-control" id="exampleimage" aria-describedby="iamgeHelp" placeholder="Enter icon Url 300 x 200">

            <div style="display:flex;">
                <input class="btnn" type="button" value="Check Image" id="btn3Status">
                <p class="p-hidden" id="wait3">Waiting</p>
            </div>

            <small id="imageHelp" class="form-text text-muted"> Don't exceed  300 x 200 pixels  </small>
        </div>


        <div class="form-group">
            <label for="examplecon" class="color-edit"> Post's Date </label>
            <input required name="date" type="text" class="form-control" id="examplecon" aria-describedby="conHelp" placeholder="Enter date ">
            <small id="conHelp" class="form-text text-muted"> dd/mm/yy  : pm/am </small>
        </div>

        <div class="form-group">
            <label for="footerimage" class="color-edit"> bottom Image Url </label>
            <input name="footerimage" type="url" class="form-control" id="footerimage" aria-describedby="iamgeHelp" placeholder="Enter image Url">

            <div style="display:flex;">
                <input class="btnn" type="button" value="Check Image" id="btn4Status">
                <p class="p-hidden" id="wait4">Waiting</p>
            </div>


            <small id="imageHelp" class="form-text text-muted"> Recommended 780 x 600 px </small>
        </div>

        <div class="form-group">
            <label for="exampllink1" class="color-edit">   Link I </label>
            <input  name="finish" type="url" class="form-control" id="exampllink1" aria-describedby="conHelp" placeholder="Enter conclusion">
            <small id="conHelp" class="form-text text-muted">Conclusion not less on 20 characters </small>
        </div>

        <div class="form-group">
            <label for="examplesign" class="color-edit">  Link  II </label>
            <input  name="sign" type="url" class="form-control" id="examplesign" aria-describedby="signHelp" placeholder="Enter post's footer">
            <small id="conHelp" class="form-text text-muted"> siganture not less on 20 characters </small>
        </div>




        <div class="form-group">
            <label for="pass" class="color-edit"> Signature </label>
            <input required name="password" type="password" class="form-control" id="pass"  placeholder=" Enter Signature ">
        </div>


        <div class="form-group">
            <input type="submit" name="submit" value="Submit Post" style="width: 100% ; margin-top: 40px ; color: snow ; background-color: #3395FF ; border: none ; outline: none ; height: 50px">
        </div>



    </form>





