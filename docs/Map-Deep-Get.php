<?php $title = 'map-deep-get'; ?>
<?php include 'includes/_header.php'; ?>

<div class="copy">
  <h2 id="description">Description</h2>

  <p>Returns item from nested map.</p>

  <h2 id="scss-usage">SCSS Usage</h2>

  <code class="mixin">map-deep-get(<em>$map</em>, <em>$keys...</em>)</code>

  <table class="mixin-table">
    <thead>
      <tr>
        <th>Parameter</th>
        <th>Required?</th>
        <th>Value</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>$map</code></td>
        <td>Yes</td>
        <td>Base map to pick from</td>
      </tr>
      <tr>
        <td><code>$keys</code></td>
        <td>Yes</td>
        <td>list of keys to traverse, can be singular, or multiple comma separated</td>
      </tr>
    </tbody>
  </table>

  <p>And so, in SCSS:</p>

  <figure class="code-example">
    <figcaption class="code-example-filename">_component.scss</figcaption>
    <pre class="code-example-code"><code class="language-scss">$myMap: (
  foo: (
    bar: (
      baz: 'qux'
    )
  )
);

.foo::before {
  content: map-deep-get($myMap, 'foo', 'bar', 'baz');
}</code></pre>
  </figure>

  <h2 id="output">Output</h2>

  <figure class="code-example">
    <figcaption class="code-example-filename">app.css</figcaption>
    <pre class="code-example-code"><code class="language-css">.foo::before {
  content: "qux";
}</code></pre>
  </figure>
</div>

<?php include 'includes/_footer.php'; ?>
