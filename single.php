<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package apply
 */

get_header();
?>

	<!--<main id="primary" class="site-main">

		<?php
/*		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'apply' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'apply' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		*/?>

	</main><!-- #main -->-->
<p>
    <a href="" onclick="clickAlert()">پیغام نتیجه</a>
</p>




    <input id="num1" type="number" value="num1">
    <br>
    <input id="num2" type="number" value="num2">
    <br>
    <input type="button" onclick="Sum()" value="click me !">
    <br>
    <h2 id="result">show result</h2>


    <a href="" type="button" onclick="fullname()">نمایش نام کامل</a>


    <div>
        <h2 id="date">result</h2>
        <button onclick="showdetail()" value="show date"></button>

    </div>

<button id="my-btn">نمایش پیغام</button>



<p>لطفا </p>
    <script>

        function showdetail(){

            document.getElementById("date").innerHTML= Date();
        }

        /*var name = "elnaz";
        alert(typeof name);*/

        /*function clickAlert(){
            var a = 25;
            var b = 60;
            var c = a * b;
            alert (c);
        };*/

        /*var names= ["elnaz" , "aryan" , 13];
        document.write(names[0]);
        document.write("<br />");
        document.write("name is =  " + names[0] + " last name is =  " + names[1] + " age is = " + names[2]);*/

        /*var result = document.getElementById("result");
        result.innerHTML= "aryan";*/


        /*function Sum () {
            var num1 = document.getElementById('num1').value;
            var num2 = document.getElementById('num2').value;

            num1 = parseInt(num1);
            num2 = parseInt(num2);

            var sum = num1 + num2;

            var lbl = document.getElementById("result");

            lbl.innerHTML= sum ;

        }*/



/*function fullname(){

    var first= elnaz;
    var last = jabbari;
    var fullname = first + last;
    alert("fullname");
}*/

        /*var person= {

            fname : elnaz,
            lname : jabbari,
            fullname : function (){

                return this.fname + "" + this.lname;
            }
        }

        console.log(person.fullname());*/



        /*var mybutton = document.getElementById('my-btn');

        mybutton.onclick = function (){
            clickme()
        }

        function clickme (){

            var x = 20;
            if (x>10){

                alert("مقدار عدد بزرگ تر از ده است");
            } else {

                alert("عدد کوچک ت است");
            }
        }*/


       /* var names=["ali", "reza" , "javad" , "elnaz"];

        for (var i=0; i<=5; i++){
            document.write(names[i] + "<br>");
        }*/



    </script>

<?php
get_sidebar();
get_footer();
