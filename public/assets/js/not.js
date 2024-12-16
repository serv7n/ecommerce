

function toggleNotifications() {
    const overlay = document.getElementById('notificationsOverlay');
    if (overlay.style.display === 'none' || overlay.style.display === '') {
      overlay.style.display = 'block';
      document.body.style.overflow = 'hidden';
    } else {
      overlay.style.display = 'none';
      document.body.style.overflow = 'auto';
    }
}