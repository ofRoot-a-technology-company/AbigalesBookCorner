<!DOCTYPE HTML>
<html>
	<head>
		<title>Abigales Reading Corner</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
        <!-- <link rel="script" href="{{ asset('js/main.js')}}"/> -->
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section class="intro">
						<header>
							<h1>Abigales Reading Corner</h1>
							<p>Enchanting Tales for Curious Minds</p>
							<ul class="actions">
								<li><a href="#first" class="arrow scrolly"><span class="label">Next</span></a></li>
							</ul>
						</header>
						<div class="content">
							<span class="image fill" data-position="center"><img src="{{ asset('images/fourth.png') }}" alt="first image of abigale" /></span>
						</div>
					</section>

				<!-- Section -->
					<section id="first">
						<header>
							<h2>About Us / Mission</h2>
						</header>
						<div class="content">
							<p><strong>Our Passion for Stories</strong> We understand the transformative power of a good story. Every book we publish is a gateway to adventures, lessons, and emotions that shape a child's worldview. Our team of dedicated writers, illustrators, and editors are committed to crafting tales that entertain, educate, and foster a lifelong love for reading.</p>
							<!-- <span class="image main"><img src="{{ asset('images/second.png') }}" alt="" /></span> -->
						</div>
					</section>

				<!-- Section -->
					<section>
						<header>
							<h2>Outreach / Charity</h2>
						</header>
						<div class="content">
							<p><strong>Join Us in Writing the Future</strong> | Empowering Communities, One Story at a Time</p>

							<p>At <strong>Abigales Book Corner</strong>, we're dedicated to fostering a love for reading, inspiring lifelong learners, and extending our hands to communities in need. With every book you choose, you're making an impact that echoes through generations.</p>
						</div>
					</section>

				<!-- Section -->
					<section>
						<header>
							<h2>Shop With Us</h2>
						</header>
						<div class="content">
							<p><strong>Abigales Book Corner</strong> Navigate here to see our latest books, and merch.</p>
                            <ul class="actions">
								<li><a href="/shop/books" class="button primary large">Books</a></li>
								<li><a href="/shop/general" class="button large">Merch</a></li>
							</ul>
							<!-- Section -->
								<section>
									<header>
										<h3>Lastest Publications</h3>
										<p>This is our latest book. A percentage of all proceeds go towards a trusted charity.</p>
									</header>
									<div class="content">
										<div class="gallery">
                                            @if(isset($latestBooks))
                                                @foreach($latestBooks as $book)
                                                    <a href=" {{ $book->source }} " class="img-fluid"><img src="{{ $book->image }}" alt="book product image" /></a>
                                                @endforeach
                                            @endif
										</div>
									</div>
								</section>

							<!-- Section -->
								<section>
									<header>
										<h3>Latest Merch</h3>
										<p>Here you can view and shop our latest merch, a percentage of all proceeds go towards a trusted charity.</p>
									</header>
									<div class="content">
										<div class="gallery">
                                            @if(isset($latestGeneralProducts))
                                                @foreach($latestGeneralProducts as $product)
                                                    <a href=" {{ $product->source }} " class="img-fluid"><img src="{{ $product->image }}" alt="product image" /></a>
                                                @endforeach
                                            @endif
										</div>
									</div>
								</section>


							<!-- Section -->
								<!-- <section>
									<header>
										<h3>Lorem gravida</h3>
										<p>Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aenean ornare velit lacus, ac varius sed enim lorem ullamcorper dolore.  ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis.</p>
									</header>
									<div class="content">
										<div class="gallery">
											<a href="images/gallery/fulls/08.jpg" class="portrait"><img src="images/gallery/thumbs/08.jpg" alt="" /></a>
											<a href="images/gallery/fulls/09.jpg" class="portrait"><img src="images/gallery/thumbs/09.jpg" alt="" /></a>
											<a href="images/gallery/fulls/10.jpg" class="landscape"><img src="images/gallery/thumbs/10.jpg" alt="" /></a>
										</div>
									</div>
								</section> -->

						</div>
					</section>

				<!-- Section -->
					<section>
						<header>
							<h2>The Blog</h2>
						</header>
						<div class="content">
							<p><strong>Our blog </strong>delves into a rich tapestry of content, ranging from our handpicked favorite books, to fresh studies that spotlight children's education. We proudly share insights into the charitable initiatives we support, and keep you abreast of the latest developments in the enchanting realms of kids' animation and educational advancements. Plus, we're excited to offer valuable tips to enhance your journey alongside us!</p>
							<ul class="actions">
								<li><a href="/blog/all" class="button primary large">Read Blog</a></li>
								<!-- <li><a href="#" class="button large">Learn More</a></li> -->
							</ul>
						</div>
					</section>

				<!-- Elements -->
				<!--
					<section>
						<header>
							<h2>Elements</h2>
						</header>
						<div class="content">

							<section>
								<header>
									<h3>Text</h3>
								</header>
								<div class="content">
									<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
									This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
									This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
									<hr />
									<h2>Heading Level 2</h2>
									<h3>Heading Level 3</h3>
									<h4>Heading Level 4</h4>
									<h5>Heading Level 5</h5>
									<hr />
									<h5>Blockquote</h5>
									<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
									<h5>Preformatted</h5>
									<pre><code>i = 0;

while (!deck.isInOrder()) {
  print 'Iteration ' + i;
  deck.shuffle();
  i++;
}

print 'Sorted in ' + i + ' iterations.';</code></pre>
								</div>
							</section>

							<section>
								<header>
									<h3>Lists</h3>
								</header>
								<div class="content">

									<h4>Unordered</h4>
									<ul>
										<li>Dolor pulvinar etiam.</li>
										<li>Sagittis adipiscing.</li>
										<li>Felis enim feugiat.</li>
									</ul>

									<h4>Alternate</h4>
									<ul class="alt">
										<li>Dolor pulvinar etiam.</li>
										<li>Sagittis adipiscing.</li>
										<li>Felis enim feugiat.</li>
									</ul>

									<h4>Ordered</h4>
									<ol>
										<li>Dolor pulvinar etiam.</li>
										<li>Etiam vel felis viverra.</li>
										<li>Felis enim feugiat.</li>
										<li>Dolor pulvinar etiam.</li>
										<li>Etiam vel felis lorem.</li>
										<li>Felis enim et feugiat.</li>
									</ol>
									<h4>Icons</h4>
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
									</ul>

									<h4>Actions</h4>
									<ul class="actions">
										<li><a href="#" class="button primary">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
									<ul class="actions stacked">
										<li><a href="#" class="button primary">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
								</div>
							</section>

							<section>
								<header>
									<h3>Table</h3>
								</header>
								<div class="content">
									<h4>Default</h4>
									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item One</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Two</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Three</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Four</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Five</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>

									<h4>Alternate</h4>
									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item One</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Two</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Three</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Four</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Five</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>
								</div>
							</section>

							<section>
								<header>
									<h3>Buttons</h3>
								</header>
								<div class="content">
									<ul class="actions">
										<li><a href="#" class="button primary">Primary</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button large">Large</a></li>
										<li><a href="#" class="button">Default</a></li>
										<li><a href="#" class="button small">Small</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button primary icon solid fa-download">Icon</a></li>
										<li><a href="#" class="button icon solid fa-download">Icon</a></li>
									</ul>
									<ul class="actions">
										<li><span class="button primary disabled">Disabled</span></li>
										<li><span class="button disabled">Disabled</span></li>
									</ul>
								</div>
							</section>

							<section>
								<header>
									<h3>Form</h3>
								</header>
								<div class="content">
									<form method="post" action="#">
										<div class="fields">
											<div class="field half">
												<label for="demo-name">Name</label>
												<input type="text" name="demo-name" id="demo-name" value="" placeholder="Jane Doe" />
											</div>
											<div class="field half">
												<label for="demo-email">Email</label>
												<input type="email" name="demo-email" id="demo-email" value="" placeholder="jane@untitled.tld" />
											</div>
											<div class="field">
												<label for="demo-category">Category</label>
												<select name="demo-category" id="demo-category">
													<option value="">-</option>
													<option value="1">Manufacturing</option>
													<option value="1">Shipping</option>
													<option value="1">Administration</option>
													<option value="1">Human Resources</option>
												</select>
											</div>
											<div class="field half">
												<input type="radio" id="demo-priority-low" name="demo-priority" checked>
												<label for="demo-priority-low">Low</label>
											</div>
											<div class="field half">
												<input type="radio" id="demo-priority-high" name="demo-priority">
												<label for="demo-priority-high">High</label>
											</div>
											<div class="field half">
												<input type="checkbox" id="demo-copy" name="demo-copy">
												<label for="demo-copy">Email me a copy</label>
											</div>
											<div class="field half">
												<input type="checkbox" id="demo-human" name="demo-human" checked>
												<label for="demo-human">Not a robot</label>
											</div>
											<div class="field">
												<label for="demo-message">Message</label>
												<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
											</div>
										</div>
										<ul class="actions">
											<li><input type="submit" value="Send Message" class="primary" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</form>
								</div>
							</section>

						</div>
					</section>
				-->

				<!-- Section -->
					<!-- <section>
						<header>
							<h2>Get in touch</h2>
						</header>
						<div class="content">
							<p><strong>Contact us</strong> We love to hear from our community</p>
							<form action="" method="post">
                                @csrf
								<div class="fields">
									<div class="field half">
										<input type="text" name="name" id="name" placeholder="Name" />
									</div>
									<div class="field half">
										<input type="email" name="email" id="email" placeholder="Email" />
									</div>
									<div class="field">
										<textarea name="message" id="message" placeholder="Message" rows="7"></textarea>
									</div>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Send Message" class="button primary" /></li>
								</ul>
							</form>
						</div>
						<footer>
							<ul class="items">
								<li>
									<h3>Email</h3>
									<a href="#">information@untitled.ext</a>
								</li>
								<li>
									<h3>Phone</h3>
									<a href="#">(000) 000-0000</a>
								</li>
								<li>
									<h3>Address</h3>
									<span>1234 Somewhere Road, Nashville, TN 00000</span>
								</li>
								<li>
									<h3>Elsewhere</h3>
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
										<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
										<li><a href="#" class="icon brands fa-codepen"><span class="label">Codepen</span></a></li>
									</ul>
								</li>
							</ul>
						</footer>
					</section> -->

				<!-- Copyright -->
					<div class="copyright">Application by &copy;OFROOT.</div>

			</div>

		<!-- Scripts -->
			<script src="{{ asset('/js/jquery.min.js') }}"></script>
			<script src="{{ asset('/js/jquery.scrolly.min.js') }}"></script>
			<script src="{{ asset('/js/browser.min.js') }}"></script>
			<script src="{{ asset('/js/breakpoints.min.js') }}"></script>
			<script src="{{ asset('/js/util.js') }}"></script>
			<script src="{{ asset('/js/main.js') }}"></script>

	</body>
</html>
