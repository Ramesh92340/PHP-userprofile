<?php 
include "dbcon.php";

session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

$id=$_SESSION["user_id"];
// $name = $_SESSION["username"];
// echo $id;


$query = "SELECT * FROM signup  WHERE id='$id'";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Database query failed: " . mysqli_error($conn));
}

$imagesId ="";

$imagesId = ""; // Initialize the variable to an empty string

$query = "SELECT id, image_path FROM images WHERE user_id = $id";
$result = mysqli_query($conn, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $imageId = $row['id'];
        $imagePathFromDB = $row['image_path'];

        // Append the current imageId to $imagesId (assuming a comma-separated list)
        $imagesId .= ($imagesId === "") ? $imageId : ", $imageId";

    
    }
} else {
    // Handle no image found scenario
}
mysqli_free_result($result);
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>vardhman_vardhman</title>
    <link rel="stylesheet" href="index.css">
    <script
        src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous">
</script>
<script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous">
</script>
<script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous">
</script>
    <link rel="icon" href="vardhamanlogo-1.png">

</head>
<style>
    .profileimage{
        border-radius: 50%;
    }
</style>
<body>
    <div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
        <a class="navbar-brand" href="profile.php?editbtn=<?php echo $imagesid; ?>">LOGO
</a>

			<button class="navbar-toggler" type="button"
              data-toggle="collapse" data-target="#nav-bar">
				<span class="sr-only"> Switch Menu </span>
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="nav-bar">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="#"> home </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"> company </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"> clients </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"> products </a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle"
               href="profile.php" data-toggle="dropdown">
              
               <?php
    if (isset($imagePathFromDB) && !empty($imagePathFromDB)) {
        $imagePath =   $imagePathFromDB; // Assuming images are stored in the "uploads" folder

        echo '<a href="profile.php?editbtn=' . $imageId . '"><img class="profileimage"  src="'. $imagePath.'" alt="Image" width="50"></a>';
    } else {
        echo ' <a href="profile_new.php?"><img src="uploads/visionSlider.png" alt="Default Image" width="200"></a>'; // Provide a default image path
    }
     ?> e</a>My Accounts 
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="edit.php?editbtn=<?php echo $id; ?>">Profile Edit</a>
							<a class="dropdown-item" href="logout.php"> Logout </a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>
    
 	<!-- <div class="container">
    <a href="https://getbootstrap.com/docs/4.4/components/navbar/"
       target="_blank">
      <h1> Bootstrap Navbar </h1>
    </a>
  </div>

    <div class="div1">

        <div class="div1">
            <div>
                <img src="vardhamanlogo-1.png" class="IMAGE">
            </div>
            <div class="inbox">
                <p class="pyra" ><span class="para">VARDHMAN COLLEGE OF ENGINERING </span><br>
                An Autonomous Institution, Affiliated to JNTUH & Approved by AICTE <br>
                Accredited by NAAC with A++ Grade</p>
            </div>
        </div>

        <div class="div2">
            <p class="pyra">EAMCET/ECET/ICET CODE: VMEG  |  College Code : 88</p>
        </div>

    </div>

    <div class="sec_navbar">
        <a class="sec_navbar_hover" >ABOUT VARDHMAN   </a>
        <a class="pulla">|</a>
        <a class="sec_navbar_hover">ADMISSIONS</a>
        <a class="pulla">|</a>
        <a class="sec_navbar_hover">ACADEMICS</a>
        <a class="pulla">|</a>
        <a class="sec_navbar_hover">RESEARCH</a>
        <a class="pulla">|</a>
        <a class="sec_navbar_hover">CONSULTANCY</a>
        <a class="pulla">|</a>
        <a class="sec_navbar_hover">TATA BYE BYE..!!</a>
        <a class="pulla">|</a>
        <a class="sec_navbar_hover">INCUBATION</a>
        <a class="pulla">|</a>
        <a class="sec_navbar_hover">CAMPUS LIFE</a>  
        <a class="pulla">|</a>
        <a class="sec_navbar_hover">CONTACT US</a>    
    </div>

    <div>
        <img src="ncc1.jpeg" class="main_img">
    </div>

    <div class="about_flex">
        <div class="about">
            <h1 class="vardhman_name">About Vardhaman</h1>
            <p class="main_para">Vardhaman College of Engineering (VCE) was established in the year 1999 by Vardhaman Educational Society, Hyderabad. It is a UGC Autonomous college, approved by AICTE, and is permanently affiliated to Jawaharlal Nehru Technological University (JNTU), Hyderabad. We offer undergraduate B.Tech programmes in CSE, CSE (AI&ML), AI&ML, AI&DS, IT, ECE, EEE, ME and CE; postgraduate M.Tech programmes with specialisation in DECS, PEED, CSE, SE, and ED; MBA programme; and doctoral programmes in CSE, ECE and ME.</p>

            <p class="main_para"><br>The college is accredited by NAAC at A++ grade with a CGPA of 3.58 on a scale of 4. Six of its UG engineering programmes –<br> B. Tech ECE, EEE, CSE, ME, CE, and IT are accredited by the National Board of Accreditation (NBA), New Delhi under the Tier-1 category.</p>
                
            <p class="main_para"><br>VCE is the most sought-after institute to make the dreams fulfilled for many aspiring engineers. Our major strength lies in imparting quality education to the global standards and envisages to address various societal needs.</p>
        </div>
        <div class="mark_mawa">
            <h1 class="news_tag">News</h1>
                <div class="mark_dec">
                    <marquee direction="up" height="50%" scrollamount="2">2022-23 TS SCHOLARSHIP RENEWAL CIRCULAR.
                        <div>
                            <
                            <p><br>SAVISKAR 2K22 is a three days event with the theme "Invoke the Excellence", organized by Dept of IT, IEEE Vardhaman Student Branch, TAIT, ISTE, and hosted on campus at the Vardhaman College Of Engineering.</p>
                        </div>
                       <div> <p></p><br>The 3rd International Conference on Applied Machine Learning and Data Analytics will be held on 16th and 17th December 2022 at Vardhaman.</p></div>
                       <div> <p></p><br>Vardhaman College of Engineering offers Google Cloud Computing Foundations curriculum.   </p></div>
                        <div><p></p><br>AICTE-LITE Advanced Web Development Minor Programme is offered at Vardhaman College of Engineering.</p></div>
                    </marquee>
                </div>
        </div>
    </div>

    <div>
        <h2 class="why_vardhman">Why Vardhman</h2>
    </div>

    <div class="flex_mawa">
        <div class="flex_mawa2">
                    <div class="vardhaman_para">
                        <p >When it comes to academics, the college has highly qualified and experienced faculty with expertise in various domains. The college revises the syllabi on regular basis for all the undergraduate and postgraduate programmes incorporating a number of advanced and emerging industry-oriented topics. As part of choice-based credit system (CBCS), the students have an opportunity to take up a wide range of elective courses including interdisciplinary and multidisciplinary courses. Students are further encouraged to pursue projects to give a vent to their creative and critical thinking.</p>
                    </div>
                    <div class="vardhaman_list">
                        <ul>
                            <li class="vardhaman_list_heading" href="#">Teaching-learning-evaluation</li>
                            <li  href="#">We follow the outcome-based education process with a constructive alignment of intended learning outcomes<br>
                                <span class="vardhaman_list_para">Read More</span></li>
                            <li class="vardhaman_list_heading" href="#">Infrastructure</li>
                             <li  href="#">The college is equipped with all facilities such as state-of-the-art laboratories, research centres and auditoriums.<br>
                                <span class="vardhaman_list_para">Read More</span></li>
                            <li class="vardhaman_list_heading" href="#">Outreach</li>
                            <li  href="#">The college has a dedicated Outreach cell to grow strong bonds with the world outside<br>
                                 <span class="vardhaman_list_para">Read More</span></li>
                            <li class="vardhaman_list_heading" href="#">Placements</li>
                            <li  href="#">Our students get placed in ace multinational companies (MNCs).<br>
                                <span class="vardhaman_list_para">Read More</span></li>
                        </ul>
                    </div>
                    <div class="vardhaman_list2">
                        <ul>
                            <li class="vardhaman_list_heading" href="#">Co-curricular and recreational activities</li>
                            <li  href="#">Co-curricular and extra- curricular activities are conducted through several associations<br>
                                <span class="vardhaman_list_para">Read More</span></li>
                            <li class="vardhaman_list_heading" href="#">
                                Student support</li>
                            <li  href="#">Looking into the safety concerns of the students, the college has an anti-ragging cell that ensures a ragging free campus<br>
                                <span class="vardhaman_list_para">Read More</span></li>
                            <li class="vardhaman_list_heading" href="#">
                                Green campus</li>
                            <li  href="#">The college campus has spread lush greenery throughout and that truly makes it a sight to behold.<br>
                                <span class="vardhaman_list_para">Read More</span></li>
                            <li class="vardhaman_list_heading" href="#">
                                Entrepreneurial ecosystem</li>
                            <li  href="#">The Center of Innovation and Entrepreneurship (CIE) at VCE provides a robust platform<br>
                                <span class="vardhaman_list_para">Read More</span></li>
                        </ul>
                    </div>
        </div>
    </div>



    <div>
        <div class="last_heading">
            <h1>Announcements</h1>
        </div>
                <div class="last_flex">
                    <div class="last_paera">
                        <p>Vardhaman College of Engineering offers Google Cloud Computing Foundations curriculum:</p>
                        <p><br>AICTE-LITE Advanced Web Development Minor Programme is offered at Vardhaman College of Engineering</p>
                        <p><br>Salesforce Students Journey<span  class="orange_color"> Click here</span></p>
                        <p><br>Hyderabad has recognized VCE as Research Centre in the Departments of CSE, ECE and ME.</p>
                        <p><br>Vardhaman College of Engineering has crossed another milestone of success by emerging as top college in thriving UGC College with Potential for Excellence (CPE) out of two Engineering colleges from State of Telangana,<span  class="orange_color">Read More..</span> </p>
                        <p><br><span  class="orange_color">For Archived Announcements Click Here</span></p>
                    </div>
                    <div>
                        <img src="https://vardhaman.org/wp-content/uploads/2021/06/visionSlider.png" class="last_img">
                    </div>
                </div>
    </div>

    <div class="main_bg_container">
        <div class="main_container">
                <div class="card">
                    <img src="University1.png" class="img_width">
                    <div class="container">
                        <h4 class="h5_heading">Academic Innovations</h4>
                        <P class="para_padding">Academic Innovation is the academic support division at Vardhaman College of Engineering (VCEH) that brings together experts in…</P>
                        <button class="button_padding">Read More</button>
                    </div>
                </div>
                <div class="card">
                    <img src="university-incubations.jpeg" class="img_width">
                    <div class="container">
                        <h4 class="h5_heading">Incubation Highlights</h4>
                        <P class="para_padding">CIE, VARDHAMAN COLLEGE OF ENGINEERING wishes to facilitate the creation of ideas and inventions that benefit society. To this…</P>
                        <button  class="button_padding">Read More</button>
                    </div>
                </div>
                <div class="card">
                    <img src="University3-1.png" class="img_width">
                    <div class="container">
                        <h4 class="h5_heading">Research Highlights</h4>
                        <P class="para_padding">Vardhaman College has been a leader in undergraduate research for many years. We provide our students with opportunities…</P>
                        <button class="button_padding">Read More</button>
                    </div>
                </div>
        </div>
    </div>


        <div class="last_detailing_Container">
            


                    <div class="last_detailing">   
                        <div class="img_self">
                            <div>
                                <img src="amazon-80x80.jpeg" class="img_radius">
                            </div>
                            <div class="self_details">
                                <h4>Pranav</h4>
                                <p class="self_color">System Development<br>Engineer,Amazon</p>
                            </div>                
                        </div>

                        <div class="lastaaaa">
                            <p>Vardhaman's unique teaching methodology focused hands-on on learning has helped me prepare for my career in Computer Science from Day 1. The emphasis on entrepreneurship and innovation beyond my academics also helped me grow holistically.<br><span class="last_color_more">read more</span> </p>
                        </div>
                    </div> 

                    

                    <div class="last_detailing">   
                        <div class="img_self">
                            <div>
                                <img src="poreddy-80x80.jpeg" class="img_radius">
                            </div>
                            <div class="self_details">
                                <h4>P. Sainath Reddy
                                </h4>
                                <p class="self_color">Assistant Controller of<br> Defence Accounts, DRDO
                                    </p>
                            </div>                
                        </div>

                        <div class="lastaaaa">
                            <p>pursued my graduation from Vardhaman College of Engineering in Electrical and Electronics Engineering. I would always be grateful to my college for providing me with all-inclusive learning with core academics, exposure to the industry, and leadership skills. The faculty is very dedicated and experts in their own fields.
                                <br><span class="last_color_more">read more</span> </p>
                        </div>
                    </div>
                
                    <div class="last_detailing">   
                        <div class="img_self">
                            <div>
                                <img src="Vibhuthi-1-80x80.jpg" class="img_radius">
                            </div>
                            <div class="self_details">
                                <h4>Ms. Vibhuti Lall
                                </h4>
                                <p class="self_color">India site HR Leader, Global <br>Capability Centre, India
                                    </p>
                            </div>                
                        </div>

                        <div class="lastaaaa">
                            <p>The students at Vardhaman College of Engineering are incredibly talented and innovative. This partnership with Advance Auto Parts India GCC (Global Capability Center) will give them a sense of direction and fast-track their career. They are prepared for the complexities in their career,
                                <br><span class="last_color_more">read more</span> </p>
                        </div>
                    </div>

                    <div class="last_detailing">   
                        <div class="img_self">
                            <div>
                                <img src="DSC_9151-copy-80x80.jpg" class="img_radius">
                            </div>
                            <div class="self_details">
                                <h4>Ms. Kothapalli Nikitha
                                </h4>
                                <p class="self_color">SDE2, Walmart Global Tech.
                                </p>
                            </div>                
                        </div>

                        <div class="lastaaaa">
                            <p>The management here is constantly supportive of students. The faculty are knowledgeable and guide us on the clear vision needed for making a career. The regular activities in college enabled me to take a step forward, motivated me to keep harmonious relations with everyone, and taught me how to work in a team.
                                <br><span class="last_color_more">read more</span> </p>
                        </div>
                    </div>
               

            
        </div>

















    <footer class="foooter">
        <div class="last_bg">
                
                        <div class="display_flex">
                            <div class="footer_col">
                                
                                <ul >
                                    <li class="heading_tag" href="#">ADDRESS</li>
                                    <li class="last_col" href="#">Vardhaman College Of Engineering<br>Kacharam, Shamshabad – 501218<br>Hyderabad, Telangana, India</li>
                                    <li class="last_col" href="#"><span class="last_color_highlight">Office Hours:</span><br><span class="last_color_highlight2">8:00am – 5:00pm</span></li>
                                    <li  href="#"><span class="last_color_highlight">Phone Number:</span><br><span class="last_color">+91 8688901557</span></li>
                                    <li class="last_col" href="#"><span class="last_color_highlight">Email</span><br><span class="last_color" > info.Vardhman@gmail.com</span></li>
                                </ul>
                            </div>
                            <div>
                               
                                <ul>
                                    <li class="heading_tag" href="#">RESOURCES</li>
                                    <li class="last_color" href="#">Curriculum</li>
                                    <li class="last_color"  href="#">Acadimic Year</li>
                                    <li class="last_color"  href="#">Examinations</li>
                                    <li class="last_color"  href="#">Committees</li>
                                    <li class="last_color"  href="#">News Letter</li>
                                    <li class="last_color"  href="#">Careers</li>
                                    <li class="last_color_more"  href="#">More...</li>
                                </ul>
                            </div>
                            <div>
                                
                                <ul>
                                    <li class="heading_tag" href="#">QUICK LINKS</li>
                                    <li class="last_color"  href="#">Manditatory Discloser</li>
                                    <li class="last_color"  href="#">Transport</li>
                                    <li class="last_color"  href="#">Anti Ragging</li>
                                    <li class="last_color"  href="#">Grievance Redressal</li>
                                    <li class="last_color"  href="#">Tuition fee paymnts</li>
                                    <li class="last_color"  href="#">Students Verfication</li>
                                    <li class="last_color_more"  href="#">More...</li>
                                </ul>

                               
                                  
                                
                            </div>
                            <div>
                                
                                <div>
                                    <ul>
                                        <li class="heading_tag" href="#">CONNECT WITH US</li>
                                        <li href=""><svg class="footer_icons" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"/></svg>
                                            <svg class="footer_icons" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-48.9 158.8c.2 2.8.2 5.7.2 8.5 0 86.7-66 186.6-186.6 186.6-37.2 0-71.7-10.8-100.7-29.4 5.3.6 10.4.8 15.8.8 30.7 0 58.9-10.4 81.4-28-28.8-.6-53-19.5-61.3-45.5 10.1 1.5 19.2 1.5 29.6-1.2-30-6.1-52.5-32.5-52.5-64.4v-.8c8.7 4.9 18.9 7.9 29.6 8.3a65.447 65.447 0 0 1-29.2-54.6c0-12.2 3.2-23.4 8.9-33.1 32.3 39.8 80.8 65.8 135.2 68.6-9.3-44.5 24-80.6 64-80.6 18.9 0 35.9 7.9 47.9 20.7 14.8-2.8 29-8.3 41.6-15.8-4.9 15.2-15.2 28-28.8 36.1 13.2-1.4 26-5.1 37.8-10.2-8.9 13.1-20.1 24.7-32.9 34z"/></svg>
                                            <!-- <svg class="footer_icons" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.<path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg> -->
                                        </li>
                                        
                                    </ul>
                                    
                                </div>
                            </div>

                        </div>
                        
        </div>                        
    </footer>

    
    </div>

</body>
</html> 