<div id="offer-help-form-cont">
    <div class="columns offer-help-section is-mobile">
        <div id="select-area" class="column animated fadeIn offer-cont-section">
            <h4>Select areas you wanna help in</h4>
            <p>Choose one or more area you want to help</p>
            <h3 class="offer-number">1.</h3>
            <div class="columns is-mobile">
                <div class="column">
                    <div id="areas" class="columns is-desktop">
                        <div class="column child-care animated"><span>Child Care</span></div>
                        <div class="column elder-care animated"><span>Elder Care</span></div>
                        <div class="column animal-care animated"><span>Animal Care</span></div>
                    </div>
                </div>
            </div>
            <div class="columns">
                <div id="selected" class="column">
                    <h2 id="selected-status">No areas selected</h2>
                </div>
            </div>
        </div> 
    </div>
    <div class="columns offer-help-section is-desktop is-centered is-vcentered">
        <div id="select-time" class="column animated fadeIn offer-cont-section">
            <h4>Choose when you are available to help</h4>
            <p>Select the duration you are available for help</p>
            <h3 class="offer-number">2.</h3>
            <div class="columns">
                <div class="column calendar-cont">
                    <input type="date">
                </div>
            </div>
        </div> 
    </div>
    <div class="columns offer-help-section is-desktop is-centered is-vcentered">
        <div id="offer-description" class="column animated fadeIn offer-cont-section">
            <h4>Introduce yourself and why you care</h4>
            <p>Write a short description between 100 - 200 characters</p>
            <h3 class="offer-number">3.</h3>
            <div class="columns">
                <div class="column textarea-cont">
                    <div class="control">
                        <textarea class="textarea has-fixed-size is-primary" placeholder="A little bit about me..."></textarea>
                        <p id="character-count">Character Count: 0 / 200</p>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <div class="columns offer-help-section is-desktop is-centered is-vcentered">
        <div id="offer-fee" class="column animated fadeIn offer-cont-section">
            <h4>Your Hourly Fee</h4>
            <p>Choose a fee or do it for free</p>
            <h3 class="offer-number">4.</h3>
            <div class="fee-col">
                <div class="control has-icons-left">
                    <input class="input is-rounded is-large is-primary" name="fee-amount" type="number" placeholder="5.00">
                    <span class="icon is-left">
                        <i data-feather="dollar-sign"></i>
                    </span>
                </div>
                <span id="fee-disclaimer">Transaction is handled through LIVE and transfer occurs once a month</p>
            </div>
        </div> 
    </div>
    <div class="control has-text-centered is-medium offer-btn-col">
        <p>You are all set !</p>
        <button id="offer-btn" class="button is-primary">See preview and list me up</button>
    </div>
</div>