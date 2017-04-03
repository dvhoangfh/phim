$(document).ready(function() {


       $('#search').autocomplete({
        minLength: 3,
        source: '/search' + $('#search').val(),
        method: 'GET',
        response: function(event, ui) {
            if (ui.content.length === 0) {
                $('.empty-text').text('Không tìm thấy').css('color', '#fff');;
            }else {
                $('.empty-text').text('');
            }
        },
        select: function(event, ui) {
            // Khi chọn 1 dòng bất kỳ sẽ chuyển hướng tới URL tương xứng
            return window.location = ui.item.url;
        }
    })
    .click(function () {
        // Click vào form thì sẽ hiển thị lại kết quả truy vấn trước đó
        $(this).autocomplete('search')
    })
    .autocomplete( "instance" )._renderItem = function( ul, item ) {
        // Dữ liệu trả về đc append style cho hợp lý
        return $( "<li class='rp_search'>" )
                .append( 
                	// "<a>" + "<img class='ui-image-result' src='" + item.img_phim + "' />" + item.ten_phim + "</a></hr>" )
                //.append( "<p><small class='pull-righ'>"+item.ten_phim+"</small></p>" )
                	"<a href='{{route('welcome.xemphim',"+item.slug+" '-'+"+item.id+")}}'><table class='slidey-list-table'><tbody><tr><td rowspan='2' class='slidey-list-thumbnail-container'><div class='slidey-list-thumbnail' style='background-image: url("+item.img_phim+"); width: 91px; height: 91px;'></div></td><td class='slidey-list-title'><p>"+item.ten_phim+"</p></td></tr><tr><td class='slidey-list-description' style='width: 222px; height: 66px; display: block; word-wrap: break-word;'></td></tr></tbody></table></a>")
                .appendTo( ul );
    };
   
});