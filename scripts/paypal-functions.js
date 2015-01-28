var codes = new Array();

function selectDuration(newDurationId) { durationId = newDurationId; }
function selectAmount(newAmountId, sender) { amountId = newAmountId; }

function gotoPayPal() {
    var url = "https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=" + codes[durationId][amountId];
	console.log(url);
    window.open(url, "paypaldonate");
}