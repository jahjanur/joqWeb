


function setCookie(cname, cvalue, days) {
  const d = new Date();
  d.setTime(d.getTime() + (days * 24 * 60 * 60 * 1000));
  const expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function setCookieForToday(name, value) {
    // Get the current date and time
    const now = new Date();

    // Calculate the time remaining until the end of the day
    const endOfDay = new Date();
    endOfDay.setHours(23, 59, 59, 999);

    // Set the cookie expiration time
    const expires = endOfDay.toUTCString();

    // Set the cookie
    document.cookie = `${name}=${encodeURIComponent(value)}; expires=${expires}; path=/`;
}

function getCookie(cname) {
  const name = cname + "=";
  const decodedCookie = decodeURIComponent(document.cookie);
  const ca = decodedCookie.split(';');
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}


function numberWithCommas(x) {
    return x ? x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") : 0;
}





// // HARAMI
// if (getCookie('j-p2-08-24')) {
//     $('.joq-poll-item-button2').html('...');
//     $.post( "https://s1.joq-albania.com/polls/harami.php", { get_votes: true})
//     .done(function( data ) {
//         if (data) {
//             $('.joq-poll-item-button2').remove();
//             for (const vote of data) {
//                 const textVote = vote['meta_value'] == '1' ? ' votë' : ' vota';
//                 $('.joq-poll-item-result2[data-id='+ vote['meta_key'] +']').append(numberWithCommas(vote['meta_value']) + textVote);
//             }
//             $('.joq-poll-item-result2').css('display', 'block');
//         }
//     });
// }

// $('.joq-poll-title2').on('click', function() {
//   if ($('.joq-poll-title2 i').hasClass('open')) {
//     $('.joq-poll-title2 i') .removeClass('open');
//     $('.joq-poll-body2') .removeClass('open');
//   } else {
//     $('.joq-poll-title2 i') .addClass('open');
//     $('.joq-poll-body2') .addClass('open');
//   }
// });

// $('.joq-poll-item-button2').on('click', async function(e) {

//     e.preventDefault();

//     const self = $(this);
    
//     grecaptcha.ready(function() {
//         grecaptcha.execute('6LfVhcgUAAAAAJYIeY9PTaOd2nLrAqyArP-5_DUN', {action: 'submit'}).then(function(token) {
//             $('.joq-poll-item-button2').html('...');
//             $.post( "https://s1.joq-albania.com/polls/harami.php", { meta_key: self.data('id'), response: token})
//             .done(( data ) => {
//                 if (data) {
//                     setCookie('j-p2-08-24', '1', 60);
//                     $('.joq-poll-item-button2').remove();
//                     for (const vote of data) {
//                         const textVote = vote['meta_value'] == '1' ? ' votë' : ' vota';
//                         $('.joq-poll-item-result2[data-id='+ vote['meta_key'] +']').append(numberWithCommas(vote['meta_value']) + textVote);
//                         if (vote.status) {
//                             console.log(vote.status);
//                         }
//                     }
//                     $('.joq-poll-item-result2').css('display', 'block');
//                 }
//             });
//         });
//     });

// });
