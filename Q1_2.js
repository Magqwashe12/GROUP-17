/* prac 3 question 1*/ 
    // button opens a page called navigator_object.html when clicked
    function navigateToPage() {
        // Redirect to the "navigator_object.html" page
        window.location.href = "navigator_object.html";
    }



    let prevScrollPos = window.pageYOffset;
        window.onscroll = function () {
        let currentScrollPos = window.pageYOffset;
        if (prevScrollPos > currentScrollPos) {
            document.querySelector(".header").style.top = "0";
        } else {
            document.querySelector(".header").style.top = "-80px"; // Adjust the value as needed
        }
        prevScrollPos = currentScrollPos;
    };

    let popupWindow = null;

    // Variables to store viewport dimensions
    const viewportWidth = window.innerWidth;
    const viewportHeight = window.innerHeight;

    function openPopup(viewName) {
            // Calculate the width and height as percentages of the viewport size
            const width = viewportWidth / 2;
            const height = viewportHeight / 2;

            // Open a new pop-up window
            const popupWindow = window.open('', viewName, `width=${width},height=${height},scrollbars=yes,resizable=yes`);

            if (popupWindow) {
                // Set the class of the pop-up window's body based on the viewName
                popupWindow.document.body.className = 'view' + viewName.split(' ')[1];

                // Display information based on the viewName
                let info = '';
                let view1_info = 'Returns a string representing the user agent of the browser';

                switch (viewName) {
                    case 'View 1':
                        info = 'navigator.userAgent Info: ' + 'Returns a string representing the user agent of the browser' + '<br><br>' + '** ' + navigator.userAgent;
                        break;
                    case 'View 2':
                       
                        info = 'navigator.userAgent Info: ' + 'Returns a string representing the version information of the browser.' + '<br><br>' + '** ' +  navigator.appVersion;
                        break;
                    case 'View 3':
                        info = 'navigator.userAgent Info: ' + 'Returns a Boolean value indicating whether cookies are enabled in the browser.' + '<br><br>' + '** ' +  navigator.cookieEnabled;
                        break;
                    case 'View 4':
                        info = 'navigator.userAgent Info: ' + 'Returns a string representing the preferred language of the users browser.' + '<br><br>' + '** ' +  navigator.language;
                        break;
                    case 'View 5':  
                        info = 'navigator.userAgent Info: ' + 'Returns a Boolean value indicating whether the browser is currently online or offline.' + '<br><br>' + '** ' +  navigator.onLine;
                        break;
                    default:
                        info = 'Invalid view';
                }

                popupWindow.document.write('<p>' + '<br><br> : ' + info + '</p');
                // Add a click event listener to the pop-up window's body to minimize it
                popupWindow.document.body.addEventListener('click', minimizePopup);
            } else {
                alert('Pop-up blocked. Please allow pop-ups for this site.');
            }
        }

    function minimizePopup() {
        if (popupWindow !== null && !popupWindow.closed) {
            popupWindow.blur();
        }
    }