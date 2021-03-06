<!-- Modal -->
<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <div class="input-group">

                    <input type="text" class="form-control" id="arxiv_search" placeholder="Search...">

                    <div class="input-group-addon" id="arxiv_search_spinner">
                        <i class='fa fa-check-circle-o'></i>
                    </div>

                    <div class="input-group-btn">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            Sort by <span id="arxiv_search_order_text">Relevance</span>
                            <span class="caret"></span>
                        </button>
                        <input type="hidden" id="arxiv_search_order" value="relevance">
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#" id="arxiv_search_order_relevance">Relevance</a></li>
                            <li><a href="#" id="arxiv_search_order_lastUpdatedDate">Date</a></li>
                        </ul>
                    </div>
                </div>
            </div> <!-- modal header -->

            <div class="modal-body">
                <div id="arxiv_search_results"></div>
            </div>

            <div class="modal-footer">
                <button type="button" id="search_modal_close" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">close</span></button>
            </div>

        </div>
    </div>
</div>
