<?php $pager->setSurroundCount(2) ?>
                <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-center">
                  <nav aria-label="Table navigation">
                    <ul class="inline-flex items-center">
                    <?php if ($pager->hasPrevious()) : ?>
                      <li class="page">
                        <a class="page-link" href="<?= $pager->getPrevious() ?>">
                        <button
                          class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                          aria-label="Previous"
                        >
                          <svg
                            class="w-4 h-4 fill-current"
                            aria-hidden="true"
                            viewBox="0 0 20 20"
                          >
                            <path
                              d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                              clip-rule="evenodd"
                              fill-rule="evenodd"
                            ></path>
                          </svg>
                        </button>
                        </a>
                      </li>
                      <?php endif ?>
                      <?php foreach ($pager->links() as $link): ?>
                        <li class="page <?= $link['active'] ? 'active' : '' ?>">
                            <a class="page-link" href="<?= $link['uri'] ?>" aria-label="<?= lang('Pager.first') ?>">
                                <button 
                                    class="px-3 py-1 <?= $link['active'] ? 'text-white bg-purple-600 border border-r-0 border-purple-600' : 'text-dark' ?> rounded-md focus:outline-none focus:shadow-outline-purple"
                                >
                                    <?= $link['title'] ?>
                                </button>
                            </a>
                        </li>
                      <?php endforeach ?>

                      <!-- <li class="page">
                      <a class="page-link" href="">
                        <button
                          class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                        >
                          2
                        </button>
                      </a>
                      </li>
                      <li class="page">
                      <a class="page-link" href="">
                        <button
                          class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple"
                        >
                          3
                        </button>
                      </a>
                      </li>
                      <li class="page">
                      <a class="page-link" href="">
                        <button
                          class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                        >
                          4
                        </button>
                      </a>
                      </li>
                      <li class="page">
                        <span class="px-3 py-1">...</span>
                      </li>
                      <li class="page">
                      <a class="page-link" href="">
                        <button
                          class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                        >
                          8
                        </button>
                      </a>
                      </li>
                      <li class="page">
                      <a class="page-link" href="">
                        <button
                          class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                        >
                          9
                        </button>
                      </a>
                      </li> -->
                      <?php if ($pager->hasNext()) : ?>
                      <li class="page">
                      <a class="page-link" href="<?= $pager->getNext() ?>">
                        <button
                          class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                          aria-label="Next"
                        >
                          <svg
                            class="w-4 h-4 fill-current"
                            aria-hidden="true"
                            viewBox="0 0 20 20"
                          >
                            <path
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"
                              fill-rule="evenodd"
                            ></path>
                          </svg>
                        </button>
                      </a>
                      </li>
                      <?php endif ?>
                    </ul>
                  </nav>
                </span>

                