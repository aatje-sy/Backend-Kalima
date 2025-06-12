const toggle = document.getElementById('themeToggle');
const body = document.body;

// Als je voorkeur wilt onthouden in localStorage (optioneel)
if (localStorage.getItem('theme') === 'dark') {
    body.classList.remove('light');
    body.classList.add('dark');
    toggle.checked = true;
}

toggle.addEventListener('change', () => {
    if (toggle.checked) {
        body.classList.remove('light');
        body.classList.add('dark');
        localStorage.setItem('theme', 'dark'); // optioneel
    } else {
        body.classList.remove('dark');
        body.classList.add('light');
        localStorage.setItem('theme', 'light'); // optioneel
    }
});
