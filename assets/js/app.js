if ("#btnPurchase") {
	let formLead = document.getElementById("form-lead");
	document.getElementById("btnPurchase").addEventListener("click", function () {
		fbq("track", "Lead");
		formLead.submit();
	});
}

/*
 * Countdown
 */
const countdown = document.getElementById("countdown");
const daysEl = document.getElementById("days");
const hoursEl = document.getElementById("hours");
const minutesEl = document.getElementById("minutes");
const secondsEl = document.getElementById("seconds");
let lifeTime = 300; // 300 minutes = 5 horas
let localStorageKey = "countDown";
let lsCdwExists = localStorage.getItem(localStorageKey);

if (countdown) {
	function startTimer(duration) {
		let timer = duration,
			hours,
			minutes,
			seconds;

		timerInterval = setInterval(() => {
			hours = parseInt(timer / 60 / 60, 10);
			minutes = parseInt((timer / 60) % 60, 10);
			seconds = parseInt(timer % 60, 10);

			hours = hours < 10 ? "0" + hours : hours;
			minutes = minutes < 10 ? "0" + minutes : minutes;
			seconds = seconds < 10 ? "0" + seconds : seconds;

			hoursEl.textContent = hours;
			minutesEl.textContent = minutes;
			secondsEl.textContent = seconds;

			localStorage.setItem(localStorageKey, timer);
			if (--timer < 0) {
				timer = duration;

				localStorage.removeItem(localStorageKey);
				clearInterval(timerInterval);

				window.location.reload();
				// window.location.href = "https://www.google.com";
			}

			// console.log(duration, timer);
		}, 1000);
	}

	let duration = 60 * lifeTime;

	if (lsCdwExists) {
		startTimer(lsCdwExists);
	} else {
		startTimer(duration);
	}
}
/* Countdown End */

$("#phone").mask("(00)00000-0000");
