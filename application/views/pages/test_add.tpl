<form id="define" action="<%$baseUrl%>/manager/review" method="post" class="pageform">
    <div class="pf-item">
      <div class="pf-l">
        <label class="pf-label">Product</label>
      </div>
      <div class="pf-r">
        <select name="product" id="product" class="pf-select validate[required]" data-prompt-position="inline" data-prompt-target="productmessage">
            <option value="">-----Select product to test-----</option>
            <option value="0">Cloud0</option>
            <option value="1">Cloud1</option>
        </select>
        <span class="pf-help">Specify Product</span><div id="productmessage"></div>
      </div>
    </div>

    <div class="pf-item">
      <div class="pf-l">
        <label class="pf-label">Release</label>
      </div>
      <div class="pf-r">
        <select name="release" id="release" class="pf-select validate[required]" data-prompt-position="inline" data-prompt-target="releasemessage">
            <option value="">-----Select Release/Revision to test-----</option>
            <option value="0">Release0</option>
            <option value="1">Release1</option>
        </select>
        <span class="pf-help">Specify Release/Revision</span><div id="releasemessage"></div>
      </div>
    </div>

    <div class="pf-item">
      <div class="pf-l">
        <label class="pf-label">Test Locale</label>
      </div>
      <div class="pf-r">
        <select name="locale" id="locale" class="pf-select validate[required]" data-prompt-position="inline" data-prompt-target="localemessage">
            <option value="">-----Select Test Locale-----</option>
            <option value="0">Locale0</option>
            <option value="1">Locale1</option>
        </select>
        <span class="pf-help">Specify Test Locale</span><div id="localemessage"></div>
      </div>
    </div>

    <div class="pf-item">
      <div class="pf-l">
        <label class="pf-label">Test Browser</label>
      </div>
      <div class="pf-r">
        <select name="browser" id="browser" class="pf-select validate[required]" data-prompt-position="inline" data-prompt-target="browsermessage">
            <option value="">-----Select Test Locale-----</option>
            <option value="0">Locale0</option>
            <option value="1">Locale1</option>
        </select>
        <span class="pf-help">Specify Test Browser</span><div id="browsermessage"></div>
      </div>
    </div>

    <div class="pf-item">
      <div class="pf-l">
        <label class="pf-label">Test Method</label>
      </div>
      <div class="pf-r">
        <select name="method" id="method" class="pf-select validate[required]" data-prompt-position="inline" data-prompt-target="methodmessage">
            <option value="">-----Select Test Locale-----</option>
            <option value="0">Manual</option>
            <option value="1">Manual/Automate</option>
            <option value="2">Automate</option>
        </select>
        <span class="pf-help">Select Test Method</span><div id="methodmessage"></div>
      </div>
    </div>

    <div class="pf-item">
      <div class="pf-l">
        <label class="pf-label">Tester</label>
      </div>
      <div class="pf-r">
          <select name="tester" id="tester" class="pf-select validate[required]" data-prompt-position="inline" data-prompt-target="testermessage">
            <option value="">-----Select Tester-----</option>
            <option value="0">ji.x.fang</option>
            <option value="1">qun.lv</option>
          </select>
          <span class="pf-help">Select Tester</span><div id="testermessage"></div>
        </div>
    </div>
    
    <div class="pf-button">
      <input type="submit" class="btn btn-submit" value="确 认" />
    </div>
</form>