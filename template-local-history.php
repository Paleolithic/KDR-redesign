<?php
/*
Template Name: Local History page
*/
?>
<?php get_header(); ?>
<script src="<?php bloginfo('template_directory'); ?>/scripts/icons-filling-effect/modernizr.js"></script> 
<main class="local">
	<section class="local-description">
		<div class="container">
			<header class="fourteen columns offset-by-one calendar-title">
				<h1 class='lobster'>Local History</h1>
				<p>Our local chapter has a vibrant history of its own. Read below to learn a bit about how we came to be, and some facts about our chapter.</p>
			</header>
		</div>
		<div class="container" id="content">
			<div class="part fourteen columns offset-by-one" >
				<h2>Since The Beginning...</h2>
				<p>The Kappa Delta Rho Iota Beta Chapter is a Social Fraternity and one of the newer chapters of Kappa Delta Rho, originally formed in 1989 and brought to full status May of 1990.  Starting as the Judean People's Front in November of 88, by the end of January a 16 person initiate pledge class was well on their way to becoming official JPF members.  On the 29th, the JPF had chosen Kappa Delta Rho as their national fraternity over both Farmhouse and Alpha Chi Rho.</p>
				<p>The next day, a discussion on preventing pledges who completed the initial pledge program from crossing, called blackballing, occurred, causing a number of members who disagreed to break off from the JPF, eventually creating Phi Kappa Psi.  With only the few members against blackballing left, the initiates were made full members and KΔP was petitioned for full membership.  By the end of May, 35  members were pledged by national and the JPF officially became a provisional chapter of KΔP.  After one year, some good reports, and 3 large pledge classes later, the provisional JPF receives it's charter from national, thus becoming the Iota Beta chapter of KΔP.</p>
			</div>
			<div class="part fourteen columns offset-by-one" >
				<h2>Our Chapter Today</h2>
				<p>In 20 years, Iota Beta has grown to over 350 members and has recently received a number of awards , including Outstanding Recruitment from the national fraternity.   A number other awards including Outstanding Community Service, Outstanding Alumni Relations, Outstanding Campus Involvement, Outstanding Membership Education, Outstanding Faculty Relations, Outstanding Scholarship, and Overall Outstanding Chapter were received throughout the years.</p>
			</div>
			<div class="part fourteen columns offset-by-one" >
				<h2>Some of our Quirks</h2>
	            <p>Facts, considering our local history need explanation - and what better person to explain these quirks then one of the initial members of the JPF, Rafi Isaac. </p>

				<blockquote><p>“It is important to note that although the historical facts of the JPF tend to be humorous, or at least light-hearted. They came about as a result of the changes and stages the group underwent in its first year. They might even be considered the result of the humorous temperament which we adopted while facing a Greek system that has been slow to change and often un-accepting of the “progressive” nature which sparked our inception. Therefore, these facts should be learned and understood by all pledges in the interest of informing them of how and why this chapter came to be.” -Rafi Isaac</p></blockquote>

			</div>
			<div class="twelve columns offset-by-two ">
				<table class="table table-striped table-hover">
					<caption><h4>Facts</h4></caption>
					<thead>
						<tr>
							<th>CATEGORY</th>
							<th>FACT</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td>Basis of History</td>
							<td>Monty Python's film The Life of Brian</td>
                        </tr>
                        <tr>
                            <td>Original Name</td>
                            <td>Judean People's Front (JPF as in the movie). 10/88-5/89</td>
						</tr>
						<tr>
							<td>Motto</td>
							<td>“Always look on the bright side of life”</td>
						</tr>
						<tr>
							<td>Colors</td>
							<td> Red and Black</td>
						</tr>
						<tr>
							<td>Flower</td>
							<td>Thornless red rose</td>
						</tr>
						<tr>
							<td>Secret salute</td>
							<td>Inverted right fist pressed against right temple</td>
						</tr>
						<tr>
							<td>Badge</td>
							<td>Circular white field containing letters and fist on left towards “J”</td>
						</tr>
						<tr>
							<td>Flag and Banner</td>
							<td>As described in constitution, see example</td>
						</tr>
						<tr>
							<td>“Patron Saint”</td>
							<td>Graham Chapman (of Monty Python: Brian, King Arthur)</td>
						</tr>
						<tr>
							<td>Chapter Holiday</td>
							<td>October 4, in memory of Chapman's death (10-4-89)</td>
						</tr>
					</tbody>
				</table>
            </div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
<script src="<?php bloginfo('template_directory'); ?>/scripts/icons-filling-effect/jquery-2.1.1.js"></script>
<script>
	jQuery(document).ready(function($) {
		$("#filler").css("height",$("#cd-container").height());
	});

	$(window).resize(function(){
		$("#filler").css("height",$("#cd-container").height());
	})
</script>