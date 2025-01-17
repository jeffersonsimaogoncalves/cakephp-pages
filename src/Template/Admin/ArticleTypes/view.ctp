<nav class="navbar navbar-expand-lg">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <?= __('Article Types') ?>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <?= $this->Html->link('<i class="material-icons">mode_edit</i> '.__('Edit'),['action'=>'edit', $articleType->id], ['class' => '','escape'=>false]) ?>
        <?= $this->Html->link('<i class="material-icons">delete</i> '.__('Delete'),['action'=>'delete', $articleType->id], ['class' => '','escape'=>false, 'confirm' => __('Are you sure you want to delete # {0}?', $articleType->id)]) ?>
      </li>
    </ul>
  </div>
</nav>
<div class="utils--spacer-default"></div>
<div class="row no-gutters">
  <div class="col-11 mx-auto ">

    <div class="card">

      <!-- CONTENT -->
      <div class="card-body">
        <figure class="figure figure--table">

        <table class="table">
          <tbody>
                                                <tr>
              <th scope="row"><?= __('Name') ?></th>
              <td><?= h($articleType->name) ?></td>
            </tr>
                                                                                    <tr>
              <th scope="row"><?= __('Id') ?></th>
              <td><?= $this->Number->format($articleType->id) ?></td>
            </tr>
                                                          </tbody>
        </table>
      </figure>

              </div>
    </div>
  </div>
</div>
<div class="row no-gutters">
  <div class="col-11 mx-auto ">
        <?php if (!empty($articleType->articles)): ?>
      <div class="card  mt-4">
        <div class="card-body">
          <h4 class="card-title"><?= __('Related Articles') ?></h4>
          <figure class="figure figure--table">
            <table id="datatables" class="table table-striped table-no-bordered table-hover dataTable dtr-inline" cellspacing="0" width="100%" style="width: 100%;" role="grid" aria-describedby="datatables_info">
              <thead>
                <tr>
                                    <th><?= __('Id') ?></th>
                                    <th><?= __('Title') ?></th>
                                    <th><?= __('Slug') ?></th>
                                    <th><?= __('Meta') ?></th>
                                    <th><?= __('Header') ?></th>
                                    <th><?= __('Body') ?></th>
                                    <th><?= __('Classes') ?></th>
                                    <th><?= __('Order') ?></th>
                                    <th><?= __('Section Id') ?></th>
                                    <th><?= __('Article Type Id') ?></th>
                                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
              </thead>
              <tbody>
                  <?php foreach ($articleType->articles as $articles): ?>
                    <tr>
                      <td data-title="Id"><?= h($articles->id) ?></td>
                      <td data-title="Title"><?= h($articles->title) ?></td>
                      <td data-title="Slug"><?= h($articles->slug) ?></td>
                      <td data-title="Meta"><?= h($articles->meta) ?></td>
                      <td data-title="Header"><?= h($articles->header) ?></td>
                      <td data-title="Body"><?= h($articles->body) ?></td>
                      <td data-title="Classes"><?= h($articles->classes) ?></td>
                      <td data-title="Order"><?= h($articles->order) ?></td>
                      <td data-title="Section Id"><?= h($articles->section_id) ?></td>
                      <td data-title="Article Type Id"><?= h($articles->article_type_id) ?></td>
                    <td data-title="actions" class="actions" class="text-right">
                      <div class="btn-group">
                        <?= $this->Html->link('<i class="material-icons">visibility</i>', ['controller' => 'Articles', 'action' => 'view', $articles->id],['class' => 'btn btn-xs btn-simple btn-info btn-icon edit','escape' => false]) ?>
                      </td>
                    </div>
                  </tr >

                <?php endforeach; ?>
              </tbody>
            </table>
          </figure>
        </div>
      </div>
    <?php endif; ?>
        <?php if (!empty($articleType->section_types)): ?>
      <div class="card  mt-4">
        <div class="card-body">
          <h4 class="card-title"><?= __('Related SectionTypes') ?></h4>
          <figure class="figure figure--table">
            <table id="datatables" class="table table-striped table-no-bordered table-hover dataTable dtr-inline" cellspacing="0" width="100%" style="width: 100%;" role="grid" aria-describedby="datatables_info">
              <thead>
                <tr>
                                    <th><?= __('Id') ?></th>
                                    <th><?= __('Name') ?></th>
                                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
              </thead>
              <tbody>
                  <?php foreach ($articleType->section_types as $sectionTypes): ?>
                    <tr>
                      <td data-title="Id"><?= h($sectionTypes->id) ?></td>
                      <td data-title="Name"><?= h($sectionTypes->name) ?></td>
                    <td data-title="actions" class="actions" class="text-right">
                      <div class="btn-group">
                        <?= $this->Html->link('<i class="material-icons">visibility</i>', ['controller' => 'SectionTypes', 'action' => 'view', $sectionTypes->id],['class' => 'btn btn-xs btn-simple btn-info btn-icon edit','escape' => false]) ?>
                      </td>
                    </div>
                  </tr >

                <?php endforeach; ?>
              </tbody>
            </table>
          </figure>
        </div>
      </div>
    <?php endif; ?>
      </div>
</div>
<div class="utils--spacer-default"></div>
