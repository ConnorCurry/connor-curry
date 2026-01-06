
(function () {
  try {
    // Persist only once to avoid excessive requests
    if (!sessionStorage.getItem('tz_sent')) {
      const tz = Intl.DateTimeFormat().resolvedOptions().timeZone;
      fetch('/set-timezone', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
        body: JSON.stringify({ timezone: tz })
      }).then(() => sessionStorage.setItem('tz_sent', '1')).catch(() => {});
    }
  } catch (e) {}
})();