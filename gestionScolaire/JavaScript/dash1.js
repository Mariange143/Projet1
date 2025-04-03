const student_profil= document.querySelector(".student_profil")
const strong1= document.querySelector(".strong1")
const buy_lesson= document.querySelector(".buy_lesson")
const btn_welcome= document.querySelector(".btn_welcome")
const buyImgBlue= document.querySelector(".buyImgBlue")
const buyImgWhite= document.querySelector(".buyImgWhite")

student_profil.addEventListener("mouseover",()=>{
    strong1.style.display = "block"
})
student_profil.addEventListener("mouseout",()=>{
    strong1.style.display = "none"
})
btn_welcome.addEventListener("mouseover",()=>{
    buy_lesson.style.display = "block"
})
btn_welcome.addEventListener("mouseout",()=>{
    buy_lesson.style.display = "none"
})





// menu close
function updateDate() {
    const options = { year: 'numeric', month: 'long', day: 'numeric', weekday: 'long' };
    const today = new Date().toLocaleDateString('fr-FR', options);
    document.getElementById('current-date').textContent = today;
}
updateDate();

document.addEventListener("DOMContentLoaded", function () {
    const daysTag = document.querySelector(".days");
    const currentDate = document.querySelector(".current-date");
    const prevNextIcon = document.querySelectorAll(".icons span");
    const remindersContainer = document.querySelector(".reminders");

    let date = new Date(),
        currYear = date.getFullYear(),
        currMonth = date.getMonth();

    const months = [
        "January", "February", "March", "April", "May", "June",
        "July", "August", "September", "October", "November", "December"
    ];

    const weekDays = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

    const reminders = {
        "2025-03-12": ["Eng-Vocabulary Test"],
        "2025-04-21": ["Financial Math-Exam"],
        "2025-05-23": ["Students'Cultural Day"]
    };

    function renderCalendar() {
        const firstDayOfMonth = new Date(currYear, currMonth, 1).getDay();
        const lastDateOfMonth = new Date(currYear, currMonth + 1, 0).getDate();
        const lastDateOfPrevMonth = new Date(currYear, currMonth, 0).getDate();
        const lastDayOfMonth = new Date(currYear, currMonth, lastDateOfMonth).getDay();

        let liTag = "";

        for (let i = firstDayOfMonth; i > 0; i--) {
            liTag += `<li class="inactive">${lastDateOfPrevMonth - i + 1}</li>`;
        }

        for (let i = 1; i <= lastDateOfMonth; i++) {
            let fullDate = `${currYear}-${String(currMonth + 1).padStart(2, "0")}-${String(i).padStart(2, "0")}`;
            let isReminder = reminders.hasOwnProperty(fullDate);
            liTag += `<li class="${isReminder ? "selected" : ""}" data-date="${fullDate}">${i}</li>`;
        }

        for (let i = lastDayOfMonth; i < 6; i++) {
            liTag += `<li class="inactive">${i - lastDayOfMonth + 1}</li>`;
        }

        currentDate.innerText = `${months[currMonth]} ${currYear}`;
        daysTag.innerHTML = liTag;

        updateReminders();
    }

    function updateReminders() {
        remindersContainer.innerHTML = `<p class="rimenders-title">Reminders</p>`;

        for (const date in reminders) {
            let events = reminders[date];

            let formattedDate = new Date(date);
            let day = formattedDate.getDate();
            let month = months[formattedDate.getMonth()];
            let year = formattedDate.getFullYear();
            let weekDay = weekDays[formattedDate.getDay()];

            remindersContainer.innerHTML += `
                <div class="reminder-details">
                    <img src="images/ptn34dp8.png" alt="Bell icon" class="bell-icon">
                    <p class="eng-vocabulary">${events.join("<br>")}</p>
                </div>
                <p class="reminder-date">${day} ${month} ${year}, ${weekDay}</p>
            `;
        }
    }

    prevNextIcon.forEach(icon => {
        icon.addEventListener("click", () => {
            currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;

            if (currMonth < 0 || currMonth > 11) {
                date = new Date(currYear, currMonth);
                currYear = date.getFullYear();
                currMonth = date.getMonth();
            } else {
                date = new Date();
            }

            renderCalendar();
        });
    });

    renderCalendar();
});
