# Waxy 简约自适应博客主题


**[在线预览 | PREVIEW](https://www.idzd.top/)**

Waxy 简约自适应博客主题，轻量高效，悦于书写！

![Waxy 简约自适应博客主题](https://raw.githubusercontent.com/dingzd1995/dingzd1995.github.io/master/img/page_img/typecho-theme-waxy/screenshot.png)

> 本主题参考**seventeen主题**，由其修改更新而来，感谢原作者的辛苦付出！

## 安装主题

**主题下载地址：[GitHub](https://github.com/dingzd1995/typecho-theme-waxy/releases/v2020.10.18) & [CDN](https://pic.idzd.top/typecho-theme-waxy/v2020.10.18.zip)**

MD5: 178AF3DD2EC62859CD75BA36A12302F6

SHA1: C6A14FCDA06BE5C75CD356B879B443054CA9130D

把主题上传到 Typecho 安装路径下的 `usr/themes/` 目录，然后解压，你也可以先解压在上传。

解压完成后，请将主题目录重命名为`Waxy`，并保证所有主题文件在此目录下。

登录 Typecho 的管理后台，进入 `控制台` -> `外观`，点击 **Waxy** 主题下方的`启用`按钮即可启用。

如需修改主题设置，请点击`设置外观`进入主题设置。

## 主题功能介绍

- 轻量高效，悦于书写

- 响应式布局

- 图片懒加载/灯箱

- 自定义侧边栏/JS/CSS样式

- 文章置顶/标星/首图/内容失效提醒/阅读剩余部分

- 短代码快捷功能（多彩提示框/多彩文字提示/简易提示框/收缩框/快捷插入音频&视频）

- 置顶公告/CDN切换/代码高亮/时间线/归档页面/Sitemap/技术统计

  

### 短代码

短代码可以快速为你提供更多展示效果。使文章层次更丰富。

#### 效果

![短代码效果](https://raw.githubusercontent.com/dingzd1995/dingzd1995.github.io/master/img/page_img/typecho-theme-waxy/shortcode.png)

#### 使用方法

```bash
#多彩提示框
[info]一般提示[/info]
[warning]警告提示[/warning]
[danger]危险提示[/danger]
[info]多行内容测试：<br />
生活如酒，或芳香，或浓烈，因为诚实，它变得醇厚；生活如歌，或高昂，或低沉，因为守信，它变得悦耳； 生活如画，或明丽，或素雅，因为诚信，它变得美丽。[/info]


#文字提示
[em]警告文字样式[/em]
[hi]高亮文字样式[/hi]
[lo]备注文字样式[/lo]


#插入视频（支持视频静音，自动播放，循环播放）
[video src="视频地址" poster="视频封面地址（可省略）" muted="muted" autoplay="autoplay" loop="loop" ]

#插入音频（支持自动播放，循环播放）
[audio src="音频地址" autoplay="autoplay" loop="loop" ]

#PS：某些浏览器限制，可能无法自动播放，不过一般静音视频不受影响~


#简易提示框（添加close="close"，可以激活关闭按钮）
[alert style="success" close="close"]简易提示框：success，默认样式[/alert]
[alert style="info" close="close"]简易提示框：info[/alert]
[alert style="warning" close="close"]简易提示框：warning[/alert]
[alert style="danger" close="close"]简易提示框：danger[/alert]


#收缩框（添加checked="checked"，自动展开收缩框；style，控制外观样式）
[shrinks title="收缩框：默认样式，自动展开" checked="checked"]内容[/shrinks]
[shrinks title="收缩框：primary" style="primary"]内容[/shrinks]
[shrinks title="收缩框：success" style="success"]内容[/shrinks]
[shrinks title="收缩框：info" style="info"]内容[/shrinks]
[shrinks title="收缩框：warning" style="warning"]内容[/shrinks]
[shrinks title="收缩框：danger" style="danger"]内容[/shrinks]

```

### 代码高亮

基于[prism.js](https://prismjs.com/download.html#themes=prism-okaidia&languages=markup+css+clike+javascript+apacheconf+c+csharp+bash+cpp+aspnet+coffeescript+markup-templating+git+less+java+php+javadoclike+markdown+json+nginx+sql+python+javadoc+smarty&plugins=line-numbers+toolbar+normalize-whitespace+show-language+copy-to-clipboard+match-braces)实现，自带8种主题。

![代码高亮设置](https://raw.githubusercontent.com/dingzd1995/dingzd1995.github.io/master/img/page_img/typecho-theme-waxy/lightcode.png)

> 移植于[CodeHighlighter-for-Typecho插件](https://github.com/Copterfly/CodeHighlighter-for-Typecho)，感谢原作者的辛苦劳动！

### 自定义侧边栏

![自定义侧边栏](https://raw.githubusercontent.com/dingzd1995/dingzd1995.github.io/master/img/page_img/typecho-theme-waxy/sidebar.png)

### 自定义CSS/JS

![自定义CSS/JS](https://raw.githubusercontent.com/dingzd1995/dingzd1995.github.io/master/img/page_img/typecho-theme-waxy/css.png)

PS:通过与置顶公告联动，还可以实现一言效果~

![hitokoto](https://raw.githubusercontent.com/dingzd1995/dingzd1995.github.io/master/img/page_img/typecho-theme-waxy/hitokoto.gif)

### 友情链接管理

一行一条，格式(请用半角空格或逗号分隔)：网站名称,网站地址,网站图标(建议:32x32),网站说明

![友情链接管理](https://raw.githubusercontent.com/dingzd1995/dingzd1995.github.io/master/img/page_img/typecho-theme-waxy/links.png)

### 文章首图

如果想使用首图，请在文章自定义字段 img 添加网址即可

### 文章标星

如果想在文章右上角显示一个显眼的标记，请添加文章自定义字段 star 即可

![star](https://raw.githubusercontent.com/dingzd1995/dingzd1995.github.io/master/img/page_img/typecho-theme-waxy/star.png)

### 文章内容失效提醒

![remind](https://raw.githubusercontent.com/dingzd1995/dingzd1995.github.io/master/img/page_img/typecho-theme-waxy/remind.png)

### 置顶公告&文章

![top](https://raw.githubusercontent.com/dingzd1995/dingzd1995.github.io/master/img/page_img/typecho-theme-waxy/top.png)

**2020/10/05**可以同时置顶多篇文章，滚动展示。

*多篇文章置顶效果：*

![top](https://raw.githubusercontent.com/dingzd1995/dingzd1995.github.io/master/img/page_img/typecho-theme-waxy/top.gif)


### 阅读剩余部分

在需要截断文章的位置插入`<!--more-->`即可

![more](https://raw.githubusercontent.com/dingzd1995/dingzd1995.github.io/master/img/page_img/typecho-theme-waxy/more.png)

### 时间线/归档页面

![page_timeline](https://raw.githubusercontent.com/dingzd1995/dingzd1995.github.io/master/img/page_img/typecho-theme-waxy/page_timeline.png)

![page_articles](https://raw.githubusercontent.com/dingzd1995/dingzd1995.github.io/master/img/page_img/typecho-theme-waxy/page_articles.png)

### Sitemap/网站地图

**百度/谷歌站长工具正常收录**

![百度/谷歌站长工具正常收录](https://raw.githubusercontent.com/dingzd1995/dingzd1995.github.io/master/img/page_img/typecho-theme-waxy/sitemap_show.png)

标准模式和纯文本模式（添加参数`?txt=1`）

![标准模式和纯文本模式（添加参数`?txt=1`）](https://raw.githubusercontent.com/dingzd1995/dingzd1995.github.io/master/img/page_img/typecho-theme-waxy/sitemap.png)

启用Sitemap/网站地图

![启用Sitemap/网站地图](https://raw.githubusercontent.com/dingzd1995/dingzd1995.github.io/master/img/page_img/typecho-theme-waxy/sitemap_edit.png)
