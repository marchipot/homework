$(document).ready(function () {

    class book {
        constructor(name, author, pages) {
            this.name = name;
            this.author = author;
            this.pages = pages;
        }
    }
    var books = [];
    var $form = $("form");
    var $name = $('.name');
    var $author = $('.author');
    var $pages = $('.pages');
    var $books = $('#output');
    var $counter = 0;
    var $h2 = `<h2 class="ui dividing header" > ${$counter} books in list</h2>`;
    $('#root').append($h2);

    $form.on('submit', (e) => {
        e.preventDefault();

        var $nameVal = $name.val();
        var $authorVal = $author.val();
        var $pagesVal = $pages.val();
        var $booksVal = $books.val();

        var booking = new book($nameVal, $authorVal, $pagesVal, $booksVal);
        books.push(booking);

        var $newArray = books.filter(function (el) {
            return el.pages > 100;
        })

        console.log(books);
        $counter = books.length;

        console.log($counter);
        var $h2 = `<h2 class="ui dividing header" > ${$counter} books in list</h2>`;

        $("h2").html($h2);
        if ($counter == 4) {
            $("#root").hide();

            var $template = `
            <div class="ui link cards">
  <div class="card">
    <div class="image">
      <img src="https://images.pexels.com/photos/5834/nature-grass-leaf-green.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
    </div>
    <div class="content">
      <div class="header">book name : %name%</div>
      <div class="meta">
        <a>author : %author%</a>
      </div>
      <div class="description">
            pages : %pages%
      </div>
    </div>
   
            `

            for (let i = 0; i < $newArray.length; i++) {
                var name = $newArray[i].name;
                var author = $newArray[i].author;
                var pages = $newArray[i].pages;
                var divContent = $template.replace('%name%', name).replace("%author%", author).replace("%pages%", pages);
                $books.append(divContent);

            }
            $("#output").show();

        }
    });



});
