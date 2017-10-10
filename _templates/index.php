<?php
    set_include_path($_SERVER['DOCUMENT_ROOT'] . '/includes');
    $primary = 0;
    include('header.php');
?>

<main id="main">
	<section class="code-container">
		  <article>
            <h2>Component Title</h2>
            <p class="detail-text">Context here</p>

            <section class="sub-block">
                <h4>Sub Component</h4>
                <p class="sub-text">Content here will give a brief on why and how this functions.</p>
                <p class="strong-text">Example</p>
                <div class="html-block"></div>
                <p class="strong-text">HTML Reference</p>
                <div class="code-block">
                    <xmp>
                        <p>a paragraph</p>
                        <a href="#" class="button black">Load more</a>
                    </xmp>
                </div>    
            </section>

            <section class="sub-block">
                <h4>Sub Component</h4>
                <p class="sub-text">Content here will give a brief on why and how this functions.</p>
                <p class="strong-text">Example</p>
                <div class="html-block"></div>
                <p class="strong-text">HTML Reference</p>
                <div class="code-block">
                    <xmp>
                        <a href="#" class="button black">Load more</a>
                    </xmp>
                </div>
            </section>

            <section class="sub-block">
                <h4>Sub Component</h4>
                <p class="sub-text">Content here will give a brief on why and how this functions.</p>
                <p class="strong-text">Example</p>
                <div class="html-block"></div>
                <p class="strong-text">HTML Reference</p>
                <div class="code-block">
                    <xmp>
                        <a href="#" class="button black">Load more</a>
                    </xmp>
                </div>
            </section>
          </article>
	</section>
</main>

<?php include('footer.php'); ?>

