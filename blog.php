<?php
//Initialize Session
session_start();

if (isset($_SESSION['login'])) {

    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Perfect Tour | Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="brand">The Perfect Tour</div>
    <div class="address-bar">Kapaleeshwarar  | Taj Mehal | Many more</div>

    <!-- Navigation -->
    <?php require_once 'nav.php'; ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
				
				<h2 class="text-center">Welcome <?php echo $fname; echo " "; echo $lname; ?> - <a href="logout.php">Logout</a></h2>
				
                    <hr>
                    <h2 class="intro-text text-center">The Perfect Tour
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/taj-mahal2.jpg" alt="">
                    <h2>TAJ MAHAL
                        <br>
                        <small>Agra,Uttar Pradesh</small>
                    </h2>
                    <p>The Taj Mahal was commissioned by Shah Jahan in 1631, to be built in the memory of his wife Mumtaz Mahal, 
                        who died on 17 June that year, while giving birth to their 14th child, Gauhara Begum.Construction started in 1632,
                        and the mausoleum was completed in 1648.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/Kapaleeshwarar Temple.jpg" alt="">
                    <h2>KAPALEESHWARAR TEMPLE
                        <br>
                        <small>Mylapore, Chennai </small>
                    </h2>
                    <p>Kapaleeshwarar Temple is a Hindu temple dedicated to lord Shiva.
                        The form of Shiva's consort Parvati worshipped at this temple is called Karpagambal is from Tamil
                        ("Goddess of the Wish-Yielding Tree"). The temple was built around the 7th century CE </p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/The Ganges River.jpg" alt="">
                    <h2>THE GANGES RIVER
                        <br>
                        <small>Devprayag</small>
                    </h2>
                    <p>The Ganges or Ganga is a trans-boundary river of Asia which flows through India and Bangladesh.
                        The 2,525 km (1,569 mi) river rises in the western Himalayas in the Indian state of Uttarakhand.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/Golden temple.jpg" alt="">
                    <h2>THE GOLDEN TEMPLE 
                        <br>
                        <small>Amritsar, Punjab</small>
                    </h2>
                    <p>The Golden Temple (also known as the Harmandir Sahib,'abode of God', or the Darbār Sahib,
                        is a gurdwara located in the city of Amritsar, Punjab, India. It is the preeminent spiritual site of Sikhism.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal4">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/The Golden City  Jaisalmer.jpg" alt="">
                    <h2>THE GOLDEN CITY :JAISALMER
                        <br>
                        <small>Rajasthan</small>
                    </h2>
                    <p>Jaisalmer,nicknamed "The Golden city", is a city in the Indian state of Rajasthan, located 575 kilometres (357 mi)
                        west of the state capital Jaipur. The town stands on a ridge of yellowish sandstone and is crowned by the ancient Jaisalmer Fort.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal5">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/The Red Fort.jpg" alt="">
                    <h2>THE RED FORT
                        <br>
                        <small>Delhi</small>
                    </h2>
                    <p>The Red Fort or Lal Qila is a historic fort in Old Delhi, Delhi in India that served as the main residence of the Mughal
                        Emperors. Emperor Shah Jahan commissioned construction of the Red Fort on 12 May 1638, when he decided to shift his capital 
                        from Agra to Delhi.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal6">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/The Gateway of India.jpg" alt="">
                    <h2>THE GATEWAY OF INDIA
                        <br>
                        <small>Mumbai</small>
                    </h2>
                    <p>The Gateway of India is an arch-monument built in the early 20th century in the city of Mumbai, India. It was erected to
                        commemorate the landing in December 1911 at Ramchandani Road near Shyamaprasad Mukherjee Chowk in Mumbai.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal7">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/Mysore palace.jpeg" alt="">
                    <h2>MYSORE PALACE
                        <br>
                        <small>Karnataka</small>
                    </h2>
                    <p>The Mysore Palace, officially known as Mysuru Palace, is a historical palace and the royal residence (house) at Mysore
                        in the Indian state of Karnataka. It is the official residence of the Wadiyar dynasty and the seat of the Kingdom of Mysore. </p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal8">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/Manali.jpg" alt="">
                    <h2>MANALI
                        <br>
                        <small>Himachal Pardesh</small>
                    </h2>
                    <p>Manali is a town in the Indian state of Himachal Pradesh.It is situated in the northern end of the Kullu
                        Valley, formed by the Beas River. Manali is a popular tourist destination in India and serves as the gateway 
                        to the Lahaul and Spiti district as well as the city of Leh in Ladakh.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal9">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/Leh Ladhak.jpeg" alt="">
                    <h2>LEH LADHAK
                        <br>
                        <small>Ladakh</small>
                    </h2>
                    <p>Leh is the joint capital and largest town of the union territory of Ladakh in India. Leh, located in the Leh district,
                        was also the historical capital of the Kingdom of Ladakh, the seat of which was in the Leh Palace, the former residence
                        of the royal family of Ladakh, built in the same style and about the same time as the Potala Palace in Tibet.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal10">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

	<!-- Modal 1 -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">TAJ MAHAL</h4>
		  </div>
		  <div class="modal-body">
			<p>The Taj Mahal is an ivory-white marble mausoleum on the right bank of the river Yamuna in the Indian city of Agra.
                            It was commissioned in 1632 by the Mughal emperor Shah Jahan (reigned from 1628 to 1658) to house the tomb of his 
                            favourite wife, Mumtaz Mahal; it also houses the tomb of Shah Jahan himself. The tomb is the centrepiece of a 
                            17-hectare (42-acre) complex, which includes a mosque and a guest house, and is set in formal gardens bounded 
                            on three sides by a crenellated wall.Construction of the mausoleum was essentially completed in 1643, but work 
                            continued on other phases of the project for another 10 years.<br> <br>The Taj Mahal complex is believed to have been 
                            completed in its entirety in 1653 at a cost estimated at the time to be around 32 million rupees, which in 2020
                            would be approximately 70 billion rupees (about U.S. $956 million). The construction project employed some 20,000
                            artisans under the guidance of a board of architects led by the court architect to the emperor, Ustad Ahmad Lahauri.<br><br>
                            The Taj Mahal was designated as a UNESCO World Heritage Site in 1983 for being "the jewel of Muslim art in India and 
                            one of the universally admired masterpieces of the world's heritage". It is regarded by many as the best example
                            of Mughal architecture and a symbol of India's rich history. The Taj Mahal attracts 7–8 million visitors a year and 
                            in 2007, it was declared a winner of the New 7 Wonders of the World (2000–2007) initiative.</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	
	<!-- Modal 2 -->
	<div id="myModal2" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">KAPALEESHWARAR TEMPLE</h4>
		  </div>
		  <div class="modal-body">
			<p>Kapaleeshwarar Temple is a Hindu temple dedicated to lord Shiva located in Mylapore, Chennai in the Indian state of Tamil Nadu.
                            The form of Shiva's consort Parvati worshipped at this temple is called Karpagambal is from Tamil ("Goddess of the Wish-Yielding Tree").
                            The temple was built around the 7th century CE and is an example of Dravidian architecture.<br><br>
                            According to the Puranas, Shakti worshipped Shiva in the form of a peacock, giving the vernacular name Mylai (Mayilāi) to the area that 
                            developed around the temple - mayil is Tamil for "peacock".Shiva is worshiped as Kapaleeswarar, and is represented by the lingam.
                            His consort Parvati is depicted as Karpagambal. The presiding deity is revered in the 7th century Tamil Saiva canonical work, the 
                            Tevaram, written by Tamil saint poets known as the Nayanars and classified as Paadal Petra Sthalam.<br><br>The Kapaleeshwarar temple
                            is of typical Dravidian architectural style, with the gopuram overpowering the street on which the temple sits. This temple is
                            also a testimonial for the vishwakarmas sthapathis. There are two entrances to the temple marked by the gopuram on either side. The
                            east gopuram is about 40 m high, while the smaller western gopuram faces the sacred tank.</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	
	<!-- Modal 3 -->
	<div id="myModal3" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">THE GANGES RIVER</h4>
		  </div>
		  <div class="modal-body">
			<p>The Ganges or Ganga is a trans-boundary river of Asia which flows through India and Bangladesh. 
                            The 2,525 km (1,569 mi) river rises in the western Himalayas in the Indian state of Uttarakhand, 
                            and flows south and east through the Gangetic plain of North India into Bangladesh, where it empties
                            into the Bay of Bengal. It is the third largest river on Earth by discharge.<br><br>
                            The main stem of the Ganges begins at the town of Devprayag, at confluence of the Alaknanda, 
                            which is the source stream in hydrology because of its greater length, and the Bhagirathi, 
                            which is considered the source stream in Hindu mythology.The Ganges is a lifeline to millions of 
                            people who live in its basin and depend on it for their daily needs.It has been important historically, 
                            with many former provincial or imperial capitals such as Pataliputra, Kannauj,
                            Kara, Munger, Kashi, Patna, Hajipur, Delhi, Bhagalpur, Murshidabad, Baharampur, Kampilya, and Kolkata 
                            located on its banks or the banks of tributaries and connected waterways. <br><br>The river is home to approximately
                            140 species of fish, 90 species of amphibians, and also reptiles and mammals, including critically endangered 
                            species such as the gharial and South Asian river dolphin. The Ganges is the most sacred river to Hindus.
                            It is worshipped as the goddess Ganga in Hinduism</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
        <!-- Modal 4 -->
	<div id="myModal4" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">THE GOLDEN TEMPLE</h4>
		  </div>
		  <div class="modal-body">
			<p>The Golden Temple (also known as the Harmandir Sahib, 'abode of God',the Darbār Sahib,
                            is a gurdwara located in the city of Amritsar, Punjab, India.It is the preeminent spiritual site of Sikhism.
                            The gurdwara is built around a man-made pool that was completed by the fourth Sikh Guru, Guru Ram Das, in 1577.
                            In 1604, Guru Arjan placed a copy of the Adi Granth in Harmandir Sahib.The Gurdwara was repeatedly rebuilt by 
                            the Sikhs after it became a target of persecution and was destroyed several times by the Mughal and invading 
                            Afghan armies.Maharaja Ranjit Singh, after founding the Sikh Empire, rebuilt it in marble and copper in 1809, 
                            and overlaid the sanctum with Gold foil in 1830. This has led to the name the Golden Temple.</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
        <!-- Modal 5 -->
	<div id="myModal5" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">THE GOLDEN CITY :JAISALMER</h4>
		  </div>
		  <div class="modal-body">
			<p>Jaisalmer , nicknamed "The Golden city", is a city in the Indian state of Rajasthan, located 575 kilometres (357 mi) 
                            west of the state capital Jaipur. The town stands on a ridge of yellowish sandstone and is crowned by the ancient
                            Jaisalmer Fort. This fort contains a royal palace and several ornate Jain temples. Many of the houses and temples 
                            of both the fort and of the town below are built of finely sculptured sandstone. The town lies in the heart of the 
                            Thar Desert (the Great Indian Desert) and has a population, including the residents of the fort, of about 78,000.
                            It is the administrative headquarters of Jaisalmer District. Jaisalmer was once the capital of Jaisalmer State.<br><br>
                            Jaisalmer, being an arid desert region, is prone to extremes in terms of temperature. The temperature varies greatly 
                            from day to night in both summer and winter. The maximum summer temperature is around 49 °C (120 °F) while the minimum 
                            is 25 °C (77 °F). The maximum winter temperature is usually around 23.6 °C (74.5 °F) and the minimum is 5 °C (41 °F).</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
        <!-- Modal 6 -->
	<div id="myModal6" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">THE RED FORT</h4>
		  </div>
		  <div class="modal-body">
			<p>The Red Fort or Lal Qila is a historic fort in Old Delhi, Delhi in India that served as the main residence of the Mughal
                            Emperors. Emperor Shah Jahan commissioned construction of the Red Fort on 12 May 1638, when he decided to shift his 
                            capital from Agra to Delhi. Originally red and white, its design is credited to architect Ustad Ahmad Lahori, 
                            who also constructed the Taj Mahal. The fort represents the peak in Mughal architecture under Shah Jahan, and combines 
                            Persianate palace architecture with Indian traditions.<br><br>The fort was plundered of its artwork and jewels during 
                            Nadir Shah's invasion of the Mughal Empire in 1739. Most of the fort's marble structures were subsequently demolished
                            by the British following the Indian Rebellion of 1857. The fort's defensive walls were largely undamaged, and the fortress 
                            was subsequently used as a garrison.</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
         <!-- Modal 7 -->
	<div id="myModal7" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">THE GATEWAY OF INDIA</h4>
		  </div>
		  <div class="modal-body">
			<p>The Gateway of India is an arch-monument built in the early 20th century in the city of Mumbai, India. It was erected 
                            to commemorate the landing in December 1911 at Ramchandani Road near Shyamaprasad Mukherjee Chowk in Mumbai.<br><br>
                            The foundation stone was laid in March 1913 for a monument built in the Indo-Saracenic style, incorporating elements 
                            of 16th-century Gujarati architecture. The final design of the monument by architect George Wittet was sanctioned only
                            in 1914, and construction was completed in 1924. The structure is a triumphal arch made of basalt, which is 26 metres
                            (85 feet) high.It is an effort from the architect George Wittet.</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
         <!-- Modal 8 -->
	<div id="myModal8" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">MYSORE PALACE</h4>
		  </div>
		  <div class="modal-body">
			<p>The Mysore Palace, officially known as Mysuru Palace, is a historical palace and the royal residence (house) 
                            at Mysore in the Indian state of Karnataka. It is the official residence of the Wadiyar dynasty and the seat of 
                            the Kingdom of Mysore. The palace is in the centre of Mysore, and faces the Chamundi Hills eastward. Mysore is 
                            commonly described as the 'City of Palaces', and there are seven palaces including this one; however, 'Mysore Palace'
                            refers specifically to this one within the Old fort.<br><br>The land on which the palace now stands was originally 
                            known as mysuru (literally, citadel), and is now known as the new Fort. Yaduraya built the first palace inside the 
                            Old Fort in the 14th century, which was burnt ablaze and constructed multiple times..</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
         <!-- Modal 9-->
	<div id="myModal9" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">MANALI</h4>
		  </div>
		  <div class="modal-body">
			<p>Manali is a town in the Indian state of Himachal Pradesh.It is situated in the northern end of the Kullu
                            Valley, formed by the Beas River. The town is located in the Kullu district, approximately 270 kilometres (170 mi)
                            north of the state capital of Shimla and 544 kilometres (338 mi) northeast of the national capital of Delhi. 
                            With a population of 8,096 people recorded in the 2011 Indian census, Manali is the beginning of an ancient 
                            trade route through Lahaul and Ladakh, over the Karakoram Pass and onto Yarkand and Hotan in the Tarim Basin 
                            of China. Manali is a popular tourist destination in India and serves as the gateway to the Lahaul and Spiti
                            district as well as the city of Leh in Ladakh</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
         <!-- Modal 10-->
	<div id="myModal10" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">LEH LADHAK</h4>
		  </div>
		  <div class="modal-body">
			<p>Leh is the joint capital and largest town of the union territory of Ladakh in India. Leh,
                            located in the Leh district, was also the historical capital of the Kingdom of Ladakh,
                            the seat of which was in the Leh Palace, the former residence of the royal family of Ladakh, 
                            built in the same style and about the same time as the Potala Palace in Tibet. Leh is at an
                            altitude of 3,524 m (11,562 ft), and is connected via National Highway 1 to Srinagar in the
                            southwest and to Manali in the south via the Leh-Manali Highway.<br><br>Leh was an important
                            stopover on trade routes along the Indus Valley between Tibet to the east, Kashmir to the west
                            and also between India and China for centuries. </p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; The Perfect Tour  ||  2021</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php

} else {
    header("location:login.php ");
}
?>
