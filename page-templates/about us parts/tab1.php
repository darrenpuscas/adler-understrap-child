                <?php
									$group = get_field('group_1');
									if( $group ): echo 'if group';
								?>
										<div>
											<h3 class="pb-2 pb-sm-1 pb-md-1"><?php the_field('heading_1')?></h3>
										</div>
										<ul class="nav nav-tabs pt-2 pt-md-2" id="myTab" role="tablist">
											<li class="nav-item" role="presentation">    
												<div class="nav-link active" id="about-adler-tab" data-bs-toggle="tab" data-bs-target="#about-adler" type="button" role="tab" aria-controls="about-adler" aria-selected="true"><h5><?php echo $group['label_1']?></h5></button>
											</li>
											<li class="nav-item" role="presentation">
												<div class="nav-link" id="why-adler-tab" data-bs-toggle="tab" data-bs-target="#why-adler" type="button" role="tab" aria-controls="why-adler" aria-selected="false"><h5><?php echo $group['label_2'] ?></h5></button>
											</li>
											<li class="nav-item" role="presentation">
												<button class="nav-link" id="community-initiatives-tab" data-bs-toggle="tab" data-bs-target="#community-initiatives" type="button" role="tab" aria-controls="community-initiatives" aria-selected="false"><h5><?php echo $group['label_3'] ;?></h5></button>
											</li>
										</ul>

										<div class="tab-content" id="myTabContent">
											<div class="tab-pane fade show active" id="about-adler" role="tabpanel" aria-labelledby="about-adler-tab"><?php echo $group['text_1'] ;?>
										</div>
											<div class="tab-pane fade" id="why-adler" role="tabpanel" aria-labelledby="why-adler-tab"><?php echo $group['text_2'] ;?>
										</div>
											
												<?php endif; ?>
												<!-- Group 1 Tabs -->
												<p>between ifs</p>
												<!-- Tab 3 repeater -->
												<?php if( have_rows('logo-text') ): ?>
													<div class="tab-pane fade" id="community-initiatives" role="tabpanel" aria-labelledby="community-initiatives-tab">
													<?php while( have_rows('logo-text') ): the_row(); 
														$logo = get_sub_field('logo');
														$heading = get_sub_field('heading');
														$text = get_sub_field('text');
														echo 'in repeat while';
													?>
														<section class="red-border logo-text-grid">
															<?php echo $logo['url']; ?>
														</section>
														<section class="red-border logo-text-grid">
															<?php echo $heading; ?>
														</section>
														<section class="red-border logo-text-grid">
															<?php echo $text; ?>
														</section>
													<?php endwhile; ?>
												</div><!-- Tab 3 repeater] -->
											<?php endif; ?>
											</div>