// Minimal enhancements: load-more and status badge behavior.
import Ajax from 'core/ajax';
import Notification from 'core/notification';

export const init = (selector) => {
    const root = document.querySelector(selector || '.jobboard-grid');
    if (!root) {
        return;
    }
    // Example: place for future infinite scroll or filters.
    // You can add event listeners to filter elements and call web services.
};

export const updateStatus = (appid, status, note) => {
    return Ajax.call([{
        methodname: 'local_jobboard_update_status',
        args: { id: appid, status: status, note: note }
    }])[0].then((resp) => {
        window.location.reload();
    }).catch(Notification.exception);
};
