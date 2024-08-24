<div class="grax_tm_section" id="portfolio">
    <div class="grax_tm_portfolio">
        <div class="container">
            <div class="grax_tm_title_holder">
                <h3>Selected <span>Works</span></h3>
            </div>

            <div class="categories">
              <div class="categories-inner">
                @foreach($categories as $category)
                      <p class="video-category" data-value="{{$category->id ?? ''}}">{{$category->name ?? ''}}</p>
                @endforeach
              </div>
            </div>

         @include('front.partials.videos')
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
    $(document).ready(function() {
        $('.video-category').on('click', function() {
            var categoryId = $(this).data('value');
            $.ajax({
                url: '{{ route("videoFilter") }}',
                type: 'GET',
                data: { category_id: categoryId },
                success: function(response) {
                    $('#videos').html(response);
                    grax_tm_data_images();
                    grax_tm_popup()

                },
                error: function(xhr) {
                    // alert('Videolar yüklenirken bir hata oluştu.');
                }
            });
        });
    });
</script>
