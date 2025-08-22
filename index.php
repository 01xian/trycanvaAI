<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>全端開發學習路線圖 - 追蹤器</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Noto Sans TC', sans-serif; }
        
        .progress-ring {
            transform: rotate(-90deg);
        }
        
        .progress-ring-circle {
            transition: stroke-dashoffset 0.35s;
            transform-origin: 50% 50%;
        }
        
        .stage-card {
            transition: all 0.3s ease;
        }
        
        .stage-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        .skill-item {
            transition: all 0.2s ease;
        }
        
        .skill-item:hover {
            background-color: #f3f4f6;
        }
        
        .completed {
            background-color: #dcfce7;
            border-color: #16a34a;
        }
        
        .in-progress {
            background-color: #fef3c7;
            border-color: #d97706;
        }
        
        .not-started {
            background-color: #f3f4f6;
            border-color: #6b7280;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">🚀 全端開發學習路線圖</h1>
            <p class="text-lg text-gray-600 mb-6">半年到一年的完整學習計畫追蹤器</p>
            
            <!-- Overall Progress -->
            <div class="bg-white rounded-xl shadow-lg p-6 max-w-md mx-auto">
                <div class="flex items-center justify-center mb-4">
                    <svg class="progress-ring w-24 h-24" viewBox="0 0 120 120">
                        <circle cx="60" cy="60" r="54" stroke="#e5e7eb" stroke-width="8" fill="transparent"/>
                        <circle id="overall-progress-circle" cx="60" cy="60" r="54" stroke="#3b82f6" stroke-width="8" 
                                fill="transparent" stroke-dasharray="339.292" stroke-dashoffset="339.292" 
                                class="progress-ring-circle"/>
                    </svg>
                    <div class="absolute text-center">
                        <div id="overall-percentage" class="text-2xl font-bold text-gray-800">0%</div>
                        <div class="text-sm text-gray-500">完成度</div>
                    </div>
                </div>
                <div class="text-center">
                    <div id="current-stage" class="text-lg font-semibold text-gray-700">準備開始你的學習之旅！</div>
                    <div id="days-elapsed" class="text-sm text-gray-500 mt-1">第 0 天</div>
                </div>
            </div>
        </div>

        <!-- Learning Stages -->
        <div class="grid gap-8">
            <!-- Stage 1 -->
            <div class="stage-card bg-white rounded-xl shadow-lg p-6 border-l-4 border-blue-500" data-stage="1">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">階段 1：前端框架 + Portfolio</h2>
                        <p class="text-gray-600">0~3 個月 | 掌握 Vue.js，完成 Laravel + Vue 專案</p>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="text-right">
                            <div class="stage-progress text-lg font-semibold text-blue-600">0/8</div>
                            <div class="text-sm text-gray-500">技能完成</div>
                        </div>
                        <button class="stage-toggle bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-colors">
                            展開
                        </button>
                    </div>
                </div>
                
                <div class="stage-content hidden">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="font-semibold text-gray-700 mb-3">🎯 技能重點</h3>
                            <div class="space-y-2">
                                <div class="skill-item p-3 rounded-lg border cursor-pointer" data-skill="vue-basics">
                                    <div class="flex items-center justify-between">
                                        <span>Vue 3 基礎 (Component、Props、Events)</span>
                                        <input type="checkbox" class="skill-checkbox w-5 h-5 text-blue-600">
                                    </div>
                                </div>
                                <div class="skill-item p-3 rounded-lg border cursor-pointer" data-skill="composition-api">
                                    <div class="flex items-center justify-between">
                                        <span>Composition API</span>
                                        <input type="checkbox" class="skill-checkbox w-5 h-5 text-blue-600">
                                    </div>
                                </div>
                                <div class="skill-item p-3 rounded-lg border cursor-pointer" data-skill="laravel-api">
                                    <div class="flex items-center justify-between">
                                        <span>Laravel API 開發</span>
                                        <input type="checkbox" class="skill-checkbox w-5 h-5 text-blue-600">
                                    </div>
                                </div>
                                <div class="skill-item p-3 rounded-lg border cursor-pointer" data-skill="vue-integration">
                                    <div class="flex items-center justify-between">
                                        <span>Vue 前端整合</span>
                                        <input type="checkbox" class="skill-checkbox w-5 h-5 text-blue-600">
                                    </div>
                                </div>
                                <div class="skill-item p-3 rounded-lg border cursor-pointer" data-skill="git-basics">
                                    <div class="flex items-center justify-between">
                                        <span>Git / GitHub 基礎</span>
                                        <input type="checkbox" class="skill-checkbox w-5 h-5 text-blue-600">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <h3 class="font-semibold text-gray-700 mb-3">🤖 AI 輔助 & 📚 英文學習</h3>
                            <div class="space-y-2">
                                <div class="skill-item p-3 rounded-lg border cursor-pointer" data-skill="ai-code-gen">
                                    <div class="flex items-center justify-between">
                                        <span>使用 ChatGPT 生成程式碼</span>
                                        <input type="checkbox" class="skill-checkbox w-5 h-5 text-blue-600">
                                    </div>
                                </div>
                                <div class="skill-item p-3 rounded-lg border cursor-pointer" data-skill="english-docs">
                                    <div class="flex items-center justify-between">
                                        <span>閱讀英文官方文件</span>
                                        <input type="checkbox" class="skill-checkbox w-5 h-5 text-blue-600">
                                    </div>
                                </div>
                                <div class="skill-item p-3 rounded-lg border cursor-pointer" data-skill="english-commits">
                                    <div class="flex items-center justify-between">
                                        <span>英文 commit 訊息</span>
                                        <input type="checkbox" class="skill-checkbox w-5 h-5 text-blue-600">
                                    </div>
                                </div>
                            </div>
                            
                            <h3 class="font-semibold text-gray-700 mb-3 mt-6">🎨 作品產出</h3>
                            <div class="bg-blue-50 p-4 rounded-lg">
                                <p class="text-sm text-gray-700">✅ 完整 CRUD 專案 + 前端 SPA</p>
                                <p class="text-sm text-gray-700">✅ 上傳 GitHub，撰寫英文 README</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stage 2 -->
            <div class="stage-card bg-white rounded-xl shadow-lg p-6 border-l-4 border-orange-500" data-stage="2">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">階段 2：Docker + Linux + 測試 + CI/CD</h2>
                        <p class="text-gray-600">3~6 個月 | 專案能部署、測試、維運</p>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="text-right">
                            <div class="stage-progress text-lg font-semibold text-orange-600">0/7</div>
                            <div class="text-sm text-gray-500">技能完成</div>
                        </div>
                        <button class="stage-toggle bg-orange-500 text-white px-4 py-2 rounded-lg hover:bg-orange-600 transition-colors">
                            展開
                        </button>
                    </div>
                </div>
                
                <div class="stage-content hidden">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="font-semibold text-gray-700 mb-3">🎯 技能重點</h3>
                            <div class="space-y-2">
                                <div class="skill-item p-3 rounded-lg border cursor-pointer" data-skill="docker-basics">
                                    <div class="flex items-center justify-between">
                                        <span>Docker 容器化 Laravel 專案</span>
                                        <input type="checkbox" class="skill-checkbox w-5 h-5 text-orange-600">
                                    </div>
                                </div>
                                <div class="skill-item p-3 rounded-lg border cursor-pointer" data-skill="linux-basics">
                                    <div class="flex items-center justify-between">
                                        <span>Linux 基礎命令</span>
                                        <input type="checkbox" class="skill-checkbox w-5 h-5 text-orange-600">
                                    </div>
                                </div>
                                <div class="skill-item p-3 rounded-lg border cursor-pointer" data-skill="unit-testing">
                                    <div class="flex items-center justify-between">
                                        <span>Laravel Unit Test / PHPUnit</span>
                                        <input type="checkbox" class="skill-checkbox w-5 h-5 text-orange-600">
                                    </div>
                                </div>
                                <div class="skill-item p-3 rounded-lg border cursor-pointer" data-skill="cicd-basics">
                                    <div class="flex items-center justify-between">
                                        <span>GitHub Actions CI/CD</span>
                                        <input type="checkbox" class="skill-checkbox w-5 h-5 text-orange-600">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <h3 class="font-semibold text-gray-700 mb-3">🤖 AI 輔助 & 📚 英文學習</h3>
                            <div class="space-y-2">
                                <div class="skill-item p-3 rounded-lg border cursor-pointer" data-skill="ai-docker">
                                    <div class="flex items-center justify-between">
                                        <span>AI 生成 Dockerfile</span>
                                        <input type="checkbox" class="skill-checkbox w-5 h-5 text-orange-600">
                                    </div>
                                </div>
                                <div class="skill-item p-3 rounded-lg border cursor-pointer" data-skill="english-docs-2">
                                    <div class="flex items-center justify-between">
                                        <span>閱讀 Docker 英文文件</span>
                                        <input type="checkbox" class="skill-checkbox w-5 h-5 text-orange-600">
                                    </div>
                                </div>
                                <div class="skill-item p-3 rounded-lg border cursor-pointer" data-skill="english-issues">
                                    <div class="flex items-center justify-between">
                                        <span>英文 Issue / PR 撰寫</span>
                                        <input type="checkbox" class="skill-checkbox w-5 h-5 text-orange-600">
                                    </div>
                                </div>
                            </div>
                            
                            <h3 class="font-semibold text-gray-700 mb-3 mt-6">🎨 作品產出</h3>
                            <div class="bg-orange-50 p-4 rounded-lg">
                                <p class="text-sm text-gray-700">✅ Portfolio 專案容器化</p>
                                <p class="text-sm text-gray-700">✅ 自動部署 + 測試覆蓋</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stage 3 -->
            <div class="stage-card bg-white rounded-xl shadow-lg p-6 border-l-4 border-green-500" data-stage="3">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">階段 3：雲端部署</h2>
                        <p class="text-gray-600">6~9 個月 | 專案上線到雲端，模擬真實環境</p>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="text-right">
                            <div class="stage-progress text-lg font-semibold text-green-600">0/6</div>
                            <div class="text-sm text-gray-500">技能完成</div>
                        </div>
                        <button class="stage-toggle bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition-colors">
                            展開
                        </button>
                    </div>
                </div>
                
                <div class="stage-content hidden">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="font-semibold text-gray-700 mb-3">🎯 技能重點</h3>
                            <div class="space-y-2">
                                <div class="skill-item p-3 rounded-lg border cursor-pointer" data-skill="aws-basics">
                                    <div class="flex items-center justify-between">
                                        <span>AWS 基礎 (EC2, S3, RDS)</span>
                                        <input type="checkbox" class="skill-checkbox w-5 h-5 text-green-600">
                                    </div>
                                </div>
                                <div class="skill-item p-3 rounded-lg border cursor-pointer" data-skill="lambda">
                                    <div class="flex items-center justify-between">
                                        <span>AWS Lambda</span>
                                        <input type="checkbox" class="skill-checkbox w-5 h-5 text-green-600">
                                    </div>
                                </div>
                                <div class="skill-item p-3 rounded-lg border cursor-pointer" data-skill="vapor">
                                    <div class="flex items-center justify-between">
                                        <span>Laravel Vapor (Serverless)</span>
                                        <input type="checkbox" class="skill-checkbox w-5 h-5 text-green-600">
                                    </div>
                                </div>
                                <div class="skill-item p-3 rounded-lg border cursor-pointer" data-skill="deployment-best">
                                    <div class="flex items-center justify-between">
                                        <span>部署最佳實踐</span>
                                        <input type="checkbox" class="skill-checkbox w-5 h-5 text-green-600">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <h3 class="font-semibold text-gray-700 mb-3">🤖 AI 輔助 & 📚 英文學習</h3>
                            <div class="space-y-2">
                                <div class="skill-item p-3 rounded-lg border cursor-pointer" data-skill="ai-deployment">
                                    <div class="flex items-center justify-between">
                                        <span>AI 生成部署腳本</span>
                                        <input type="checkbox" class="skill-checkbox w-5 h-5 text-green-600">
                                    </div>
                                </div>
                                <div class="skill-item p-3 rounded-lg border cursor-pointer" data-skill="aws-docs">
                                    <div class="flex items-center justify-between">
                                        <span>AWS 英文官方文件</span>
                                        <input type="checkbox" class="skill-checkbox w-5 h-5 text-green-600">
                                    </div>
                                </div>
                            </div>
                            
                            <h3 class="font-semibold text-gray-700 mb-3 mt-6">🎨 作品產出</h3>
                            <div class="bg-green-50 p-4 rounded-lg">
                                <p class="text-sm text-gray-700">✅ Portfolio 上線 AWS</p>
                                <p class="text-sm text-gray-700">✅ 英文操作說明</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stage 4 -->
            <div class="stage-card bg-white rounded-xl shadow-lg p-6 border-l-4 border-purple-500" data-stage="4">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">階段 4：進階技能 + 國外遠端準備</h2>
                        <p class="text-gray-600">9~12 個月 | 提升國外專案競爭力</p>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="text-right">
                            <div class="stage-progress text-lg font-semibold text-purple-600">0/7</div>
                            <div class="text-sm text-gray-500">技能完成</div>
                        </div>
                        <button class="stage-toggle bg-purple-500 text-white px-4 py-2 rounded-lg hover:bg-purple-600 transition-colors">
                            展開
                        </button>
                    </div>
                </div>
                
                <div class="stage-content hidden">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="font-semibold text-gray-700 mb-3">🎯 技能重點</h3>
                            <div class="space-y-2">
                                <div class="skill-item p-3 rounded-lg border cursor-pointer" data-skill="kubernetes">
                                    <div class="flex items-center justify-between">
                                        <span>Kubernetes (K8S) 基礎</span>
                                        <input type="checkbox" class="skill-checkbox w-5 h-5 text-purple-600">
                                    </div>
                                </div>
                                <div class="skill-item p-3 rounded-lg border cursor-pointer" data-skill="advanced-vue">
                                    <div class="flex items-center justify-between">
                                        <span>進階 Vue 或 React</span>
                                        <input type="checkbox" class="skill-checkbox w-5 h-5 text-purple-600">
                                    </div>
                                </div>
                                <div class="skill-item p-3 rounded-lg border cursor-pointer" data-skill="spa-ssr">
                                    <div class="flex items-center justify-between">
                                        <span>SPA/SSR 概念</span>
                                        <input type="checkbox" class="skill-checkbox w-5 h-5 text-purple-600">
                                    </div>
                                </div>
                                <div class="skill-item p-3 rounded-lg border cursor-pointer" data-skill="microservices">
                                    <div class="flex items-center justify-between">
                                        <span>微服務概念與應用</span>
                                        <input type="checkbox" class="skill-checkbox w-5 h-5 text-purple-600">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <h3 class="font-semibold text-gray-700 mb-3">🤖 AI 輔助 & 📚 英文學習</h3>
                            <div class="space-y-2">
                                <div class="skill-item p-3 rounded-lg border cursor-pointer" data-skill="ai-k8s">
                                    <div class="flex items-center justify-between">
                                        <span>AI 生成 K8S 配置</span>
                                        <input type="checkbox" class="skill-checkbox w-5 h-5 text-purple-600">
                                    </div>
                                </div>
                                <div class="skill-item p-3 rounded-lg border cursor-pointer" data-skill="english-meetings">
                                    <div class="flex items-center justify-between">
                                        <span>英文技術會議練習</span>
                                        <input type="checkbox" class="skill-checkbox w-5 h-5 text-purple-600">
                                    </div>
                                </div>
                                <div class="skill-item p-3 rounded-lg border cursor-pointer" data-skill="english-portfolio">
                                    <div class="flex items-center justify-between">
                                        <span>英文 Portfolio 全面化</span>
                                        <input type="checkbox" class="skill-checkbox w-5 h-5 text-purple-600">
                                    </div>
                                </div>
                            </div>
                            
                            <h3 class="font-semibold text-gray-700 mb-3 mt-6">🎨 作品產出</h3>
                            <div class="bg-purple-50 p-4 rounded-lg">
                                <p class="text-sm text-gray-700">✅ 微服務或多容器專案</p>
                                <p class="text-sm text-gray-700">✅ 英文 Portfolio，準備遠端接案</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Study Timer & Notes -->
        <div class="mt-12 grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-800 mb-4">📅 學習時間追蹤</h3>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">開始學習日期</label>
                        <input type="date" id="start-date" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                    <div class="bg-blue-50 p-4 rounded-lg">
                        <div class="text-sm text-gray-600">目標完成時間</div>
                        <div id="target-date" class="text-lg font-semibold text-blue-600">請設定開始日期</div>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-800 mb-4">📝 學習筆記</h3>
                <textarea id="learning-notes" placeholder="記錄你的學習心得、遇到的問題、解決方案..." 
                          class="w-full h-32 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent resize-none"></textarea>
                <button id="save-notes" class="mt-3 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-colors">
                    儲存筆記
                </button>
            </div>
        </div>
    </div>

    <script>
        // 學習進度追蹤系統
        class LearningTracker {
            constructor() {
                this.startDate = localStorage.getItem('learningStartDate') || null;
                this.progress = JSON.parse(localStorage.getItem('learningProgress') || '{}');
                this.notes = localStorage.getItem('learningNotes') || '';
                this.init();
            }

            init() {
                this.setupEventListeners();
                this.loadProgress();
                this.updateOverallProgress();
                this.loadStartDate();
                this.loadNotes();
            }

            setupEventListeners() {
                // 階段展開/收合
                document.querySelectorAll('.stage-toggle').forEach(button => {
                    button.addEventListener('click', (e) => {
                        const stageCard = e.target.closest('.stage-card');
                        const content = stageCard.querySelector('.stage-content');
                        const isHidden = content.classList.contains('hidden');
                        
                        content.classList.toggle('hidden');
                        button.textContent = isHidden ? '收合' : '展開';
                    });
                });

                // 技能勾選
                document.querySelectorAll('.skill-checkbox').forEach(checkbox => {
                    checkbox.addEventListener('change', (e) => {
                        const skillItem = e.target.closest('.skill-item');
                        const skillId = skillItem.dataset.skill;
                        this.progress[skillId] = e.target.checked;
                        this.saveProgress();
                        this.updateSkillItemStyle(skillItem, e.target.checked);
                        this.updateStageProgress();
                        this.updateOverallProgress();
                    });
                });

                // 開始日期設定
                document.getElementById('start-date').addEventListener('change', (e) => {
                    this.startDate = e.target.value;
                    localStorage.setItem('learningStartDate', this.startDate);
                    this.updateTargetDate();
                    this.updateDaysElapsed();
                });

                // 筆記儲存
                document.getElementById('save-notes').addEventListener('click', () => {
                    const notes = document.getElementById('learning-notes').value;
                    localStorage.setItem('learningNotes', notes);
                    this.showNotification('筆記已儲存！');
                });
            }

            loadProgress() {
                document.querySelectorAll('.skill-checkbox').forEach(checkbox => {
                    const skillItem = checkbox.closest('.skill-item');
                    const skillId = skillItem.dataset.skill;
                    const isCompleted = this.progress[skillId] || false;
                    
                    checkbox.checked = isCompleted;
                    this.updateSkillItemStyle(skillItem, isCompleted);
                });
                this.updateStageProgress();
            }

            updateSkillItemStyle(skillItem, isCompleted) {
                skillItem.classList.remove('completed', 'not-started');
                skillItem.classList.add(isCompleted ? 'completed' : 'not-started');
            }

            updateStageProgress() {
                document.querySelectorAll('.stage-card').forEach(stageCard => {
                    const checkboxes = stageCard.querySelectorAll('.skill-checkbox');
                    const completed = Array.from(checkboxes).filter(cb => cb.checked).length;
                    const total = checkboxes.length;
                    
                    const progressElement = stageCard.querySelector('.stage-progress');
                    progressElement.textContent = `${completed}/${total}`;
                    
                    // 更新階段狀態
                    stageCard.classList.remove('completed', 'in-progress', 'not-started');
                    if (completed === total && total > 0) {
                        stageCard.classList.add('completed');
                    } else if (completed > 0) {
                        stageCard.classList.add('in-progress');
                    } else {
                        stageCard.classList.add('not-started');
                    }
                });
            }

            updateOverallProgress() {
                const allCheckboxes = document.querySelectorAll('.skill-checkbox');
                const completedSkills = Array.from(allCheckboxes).filter(cb => cb.checked).length;
                const totalSkills = allCheckboxes.length;
                const percentage = totalSkills > 0 ? Math.round((completedSkills / totalSkills) * 100) : 0;
                
                // 更新圓形進度條
                const circle = document.getElementById('overall-progress-circle');
                const circumference = 2 * Math.PI * 54;
                const offset = circumference - (percentage / 100) * circumference;
                circle.style.strokeDashoffset = offset;
                
                // 更新百分比文字
                document.getElementById('overall-percentage').textContent = `${percentage}%`;
                
                // 更新當前階段
                this.updateCurrentStage(completedSkills, totalSkills);
                this.updateDaysElapsed();
            }

            updateCurrentStage(completed, total) {
                let currentStage = '準備開始你的學習之旅！';
                
                if (completed === total && total > 0) {
                    currentStage = '🎉 恭喜！所有階段都完成了！';
                } else if (completed >= 22) {
                    currentStage = '階段 4：進階技能 + 遠端準備';
                } else if (completed >= 15) {
                    currentStage = '階段 3：雲端部署';
                } else if (completed >= 8) {
                    currentStage = '階段 2：Docker + 測試 + CI/CD';
                } else if (completed > 0) {
                    currentStage = '階段 1：前端框架 + Portfolio';
                }
                
                document.getElementById('current-stage').textContent = currentStage;
            }

            updateDaysElapsed() {
                if (!this.startDate) {
                    document.getElementById('days-elapsed').textContent = '第 0 天';
                    return;
                }
                
                const start = new Date(this.startDate);
                const today = new Date();
                const diffTime = Math.abs(today - start);
                const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
                
                document.getElementById('days-elapsed').textContent = `第 ${diffDays} 天`;
            }

            loadStartDate() {
                if (this.startDate) {
                    document.getElementById('start-date').value = this.startDate;
                    this.updateTargetDate();
                }
            }

            updateTargetDate() {
                if (!this.startDate) {
                    document.getElementById('target-date').textContent = '請設定開始日期';
                    return;
                }
                
                const start = new Date(this.startDate);
                const target = new Date(start);
                target.setMonth(target.getMonth() + 12); // 12個月後
                
                const options = { year: 'numeric', month: 'long', day: 'numeric' };
                document.getElementById('target-date').textContent = target.toLocaleDateString('zh-TW', options);
            }

            loadNotes() {
                document.getElementById('learning-notes').value = this.notes;
            }

            saveProgress() {
                localStorage.setItem('learningProgress', JSON.stringify(this.progress));
            }

            showNotification(message) {
                // 簡單的通知效果
                const notification = document.createElement('div');
                notification.className = 'fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50';
                notification.textContent = message;
                document.body.appendChild(notification);
                
                setTimeout(() => {
                    notification.remove();
                }, 3000);
            }
        }

        // 初始化學習追蹤器
        document.addEventListener('DOMContentLoaded', () => {
            new LearningTracker();
        });
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9730ed3a30de4a1e',t:'MTc1NTg1MDU3Mi4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>
