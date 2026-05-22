function updateSchedule() {
  const items = document.querySelectorAll("#scheduleList li");

  const now = new Date();
  const currentHour = now.getHours();
  const currentMin = now.getMinutes();

  items.forEach((item) => {
    const time = item.getAttribute("data-time").split(":");
    const hour = parseInt(time[0]);
    const min = parseInt(time[1]);

    item.classList.remove("active");

    if (currentHour === hour && currentMin >= min) {
      item.classList.add("active");
    }
  });
}

setInterval(updateSchedule, 60000);
updateSchedule();

//////////////////////////////////////////////
//////////////////////////////////////////////

const scheduleList = document.getElementById("scheduleList");

// Generate time slots (5:00 AM → 12:00 PM)
function generateSchedule() {
  let startHour = 6;
  let endHour = 21;

  for (let hour = startHour; hour < endHour; hour++) {
    for (let min of [0, 30]) {
      let displayHour = hour > 12 ? hour - 12 : hour;
      let suffix = hour >= 12 ? "PM" : "AM";

      let formattedMin = min === 0 ? "00" : "30";

      let timeString = `${displayHour}:${formattedMin} ${suffix}`;
      let dataTime = `${hour}:${formattedMin}`;

      let li = document.createElement("li");
      li.setAttribute("data-time", dataTime);

      li.innerHTML = `
        <span>${timeString}</span>
        <p>Program Slot</p>
      `;

      scheduleList.appendChild(li);
    }
  }
}

generateSchedule();

//////////////////////////////////////////////
//////////////////////////////////////////////

function updateSchedule() {
  const items = document.querySelectorAll("#scheduleList li");
  const now = new Date();

  const currentMinutes = now.getHours() * 60 + now.getMinutes();

  items.forEach((item) => {
    const [hour, min] = item.dataset.time.split(":").map(Number);
    const itemMinutes = hour * 60 + min;

    item.classList.remove("active");

    // Highlight current 30-min slot
    if (currentMinutes >= itemMinutes && currentMinutes < itemMinutes + 30) {
      item.classList.add("active");
    }
  });
}

setInterval(updateSchedule, 60000);
updateSchedule();

//////////////////////////////////////////////
//////////////////////////////////////////////

function scrollToActive() {
  const active = document.querySelector(".schedule-list li.active");
  if (active) {
    active.scrollIntoView({
      behavior: "smooth",
      block: "center",
    });
  }
}

setTimeout(scrollToActive, 500);
