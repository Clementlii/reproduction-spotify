// -----------------------------------------------------------------------------
// @section     Seconds to time
// @description Conversion d'un nombre de secondes au format hh:mm:ss
// -----------------------------------------------------------------------------

const secondsToTime = (e) => {
	// @see https://stackoverflow.com/questions/3733227/javascript-seconds-to-minutes-and-seconds
	let hh = Math.floor(e / 3600)
			.toString()
			.padStart(2, "0"),
		mm = Math.floor((e % 3600) / 60)
			.toString()
			.padStart(2, "0"),
		ss = Math.floor(e % 60)
			.toString()
			.padStart(2, "0");
	if (hh == "00") hh = null; // Si pas d'heures, alors affichage des heures escamotée
	return [hh, mm, ss].filter(Boolean).join(":");
};

// -----------------------------------------------------------------------------
// @section     Audio players
// @description Lecteur audio utilisant la spécification HTMLMediaElement
// -----------------------------------------------------------------------------

const audioPlayer = (() => {
	const audios = document.querySelectorAll(".audio");

	const audioDuration = (audio, player, i) => {
		const output = document.querySelectorAll(".audio-player-duration")[i];
		console.log(output);
		//output.value = secondsToTime(audio.duration)
	};

	const addAudioPlayer = (() => {
		let i = 0;
		for (const audio of audios) {
			i++;
			const player = `<div class="audio-player"><button class="audio-play-pause"><svg xmlns="http://www.w3.org/2000/svg" width="1024" height="1024" viewBox="0 0 1024 1024"><path d="M204.524 102.03L819.48 512 204.523 921.97z"/></svg></button><output class="audio-player-current-time">0:00</output><div class="progress"></div><output class="audio-player-duration">0:00</output><div><button onclick="document.document.getElementById('audio-player${i}')[0].volume += 0.1">+</button><button onclick="document.getElementById('audio-player${i}')[0].volume -= 0.1">-</button></div></div>`;
			audio.id = "audio-player" + i;
			audio.insertAdjacentHTML("afterend", player);
			audio.addEventListener("loadedmetadata", audioDuration(audio, player, i)); // @see https://stackoverflow.com/questions/44610417/audio-duration-returns-nan
			//audio.addEventListener('loaded', audioDuration(audio, player, i))
		}
	})();
})();
