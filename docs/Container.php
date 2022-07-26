<?php $title = 'Container'; ?>
<?php include 'includes/_header.php'; ?>

<div class="copy">
  <h2 id="description">Description</h2>

  <p>A design grid conforming container class. Makes a centered column that will restrict its width based on the config passed.</p>

  <h2 id="setup">Setup</h2>

  <p>The required <code>$structure</code> map (<a href="/Setup.php">Setup</a>).</p>

  <h2 id="output">Output</h2>

  <figure class="code-example">
    <figcaption class="code-example-filename">app.css</figcaption>
    <pre class="code-example-code"><code class="language-css">.container {
  width: calc(var(--container-width, 100%) - 2 * var(--breakout-container-outer-gutter, var(--container-outer-gutter, var(--outer-gutter, 0))));
  margin-left: auto;
  margin-right: auto;
}</code></pre>
  </figure>

  <h2 id="scss-usage">SCSS Usage</h2>

  <figure class="code-example">
    <figcaption class="code-example-filename">_component.scss</figcaption>
    <pre class="code-example-code"><code class="language-scss">.my-container {
  @include container;
}
</code></pre>
  </figure>

  <h2 id="demo">Demo</h2>

  <p>This site uses <code>.container</code> in the <code>main</code> node.</p>
</div>

<?php include 'includes/_footer.php'; ?>
