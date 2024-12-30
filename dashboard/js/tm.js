function setTheme(theme) {
    const rootElement = document.documentElement;

    if (theme === 'auto') {
        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        rootElement.setAttribute('data-bs-theme', prefersDark ? 'dark' : 'light');
    } else {
        rootElement.setAttribute('data-bs-theme', theme);
    }

    localStorage.setItem('theme', theme);
}

function loadTheme() {
    const savedTheme = localStorage.getItem('theme') || 'auto';
    setTheme(savedTheme);
}

loadTheme();

document.getElementById('theme-light').addEventListener('click', () => setTheme('light'));
document.getElementById('theme-dark').addEventListener('click', () => setTheme('dark'));
document.getElementById('theme-auto').addEventListener('click', () => setTheme('auto'));
