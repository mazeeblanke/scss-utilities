<?php $title = 'typeset'; ?>
<?php include 'includes/_header.php'; ?>

<div class="copy">
  <h2 id="description">Description</h2>

  <p>Mixin to add a responsive type set to an element. This mixin is used in the auto generated <a href="/Typography.php">Typography</a> CSS classes.</p>

  <h2 id="scss-usage">SCSS Usage</h2>

  <code class="mixin"><span class="mixin-include">@include</span> typeset(<em>typestyle</em>)</code>

  <p>Where <code>typestyle</code> is one of your <a href="/Typography.php#setup">defined responsive typestyle</a> names.</p>

  <p>And so, in SCSS:</p>

  <figure class="code-example">
    <figcaption class="code-example-filename">_component.scss</figcaption>
    <pre class="code-example-code"><code class="language-scss">.foo {
  @include typeset(h1);
}</code></pre>
  </figure>

  <h2 id="output">Output</h2>

  <figure class="code-example">
    <figcaption class="code-example-filename">app.css</figcaption>
    <pre class="code-example-code"><code class="language-css">.foo {
  font-family: var(--sans);
  font-weight: 500;
  --bold-weight: 500;
  font-size: 2rem;
  line-height: 1.2;
  letter-spacing: -0.02em;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
}
.foo b,
.foo strong {
  font-weight: var(--bold-weight);
}
.foo i,
.foo em {
  font-style: italic;
}
@media screen and (min-width: 650px) {
  .foo {
    font-size: 2.25rem;
  }
}
@media screen and (min-width: 990px) {
  .foo {
    font-size: 3rem;
  }
}</code></pre>
  </figure>
</div>

<?php include 'includes/_footer.php'; ?>
