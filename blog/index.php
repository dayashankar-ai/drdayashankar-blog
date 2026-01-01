<?php
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enterprise Healthcare AI Insights | Dr. Daya Shankar Tiwari</title>
    <meta name="description" content="Practical, board-level guidance to plan, govern, and scale AI in healthcare. Nuclear-grade systems engineering meets clinical safety and ROI models.">
    
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZKFH6DZL08"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-ZKFH6DZL08');
    </script>

    <!-- Google Search Console Verification -->
    <meta name="google-site-verification" content="PACbaDKONM8AJO9k0IX2AernAKRC0bDUbY7FqDKOIiw">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: #1a202c;
            background: #f7fafc;
        }

        .header {
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
            color: white;
            padding: 3rem 1rem;
            text-align: center;
        }

        .header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .header p {
            font-size: 1.125rem;
            opacity: 0.95;
            max-width: 800px;
            margin: 0 auto;
        }

        .nav {
            background: #1e293b;
            padding: 1rem;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .nav-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav a {
            color: white;
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            transition: background 0.2s;
        }

        .nav a:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }

        .featured {
            background: white;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            margin-bottom: 3rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
        }

        .featured-image {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: relative;
            min-height: 300px;
        }

        .featured-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .featured-content {
            padding: 2rem;
        }

        .featured-badge {
            background: #3b82f6;
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.875rem;
            display: inline-block;
            margin-bottom: 1rem;
        }

        .featured h2 {
            font-size: 1.875rem;
            margin-bottom: 1rem;
            color: #1e293b;
        }

        .featured p {
            color: #64748b;
            margin-bottom: 1.5rem;
        }

        .featured-meta {
            display: flex;
            gap: 1rem;
            font-size: 0.875rem;
            color: #94a3b8;
            margin-bottom: 1.5rem;
        }

        .btn {
            display: inline-block;
            background: #3b82f6;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.2s;
        }

        .btn:hover {
            background: #2563eb;
            transform: translateY(-2px);
        }

        .section-title {
            font-size: 2rem;
            margin-bottom: 2rem;
            color: #1e293b;
        }

        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .blog-card {
            background: white;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            transition: all 0.3s;
            text-decoration: none;
            color: inherit;
            display: block;
        }

        .blog-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.15);
        }

        .blog-card-image {
            width: 100%;
            height: 200px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: relative;
        }

        .blog-card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .blog-card-content {
            padding: 1.5rem;
        }

        .blog-card-meta {
            display: flex;
            gap: 1rem;
            font-size: 0.875rem;
            color: #94a3b8;
            margin-bottom: 1rem;
        }

        .blog-card h3 {
            font-size: 1.25rem;
            margin-bottom: 0.75rem;
            color: #1e293b;
        }

        .blog-card p {
            color: #64748b;
            font-size: 0.9375rem;
            margin-bottom: 1rem;
        }

        .blog-card-footer {
            color: #3b82f6;
            font-weight: 500;
            font-size: 0.9375rem;
        }

        .footer {
            background: #1e293b;
            color: white;
            padding: 2rem 1rem;
            margin-top: 4rem;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 1.875rem;
            }

            .featured {
                grid-template-columns: 1fr;
            }

            .blog-grid {
                grid-template-columns: 1fr;
            }

            .nav-content {
                flex-direction: column;
                gap: 1rem;
            }
        }
    </style>
</head>
<body>
    <nav class="nav">
        <div class="nav-content">
            <a href="/" style="font-weight: 600;">DST</a>
            <div style="display: flex; gap: 1rem;">
                <a href="/">Home</a>
                <a href="/about">About</a>
                <a href="/blog">Blog</a>
                <a href="/contact">Contact</a>
            </div>
        </div>
    </nav>

    <div class="header">
        <h1>Enterprise Healthcare AI Insights</h1>
        <p>Practical, board-level guidance to plan, govern, and scale AI in healthcare. Nuclear-grade systems engineering meets clinical safety and ROI models.</p>
    </div>

    <div class="container">
        <?php
        // Load posts from JSON
        $jsonPath = __DIR__ . '/../uploads/blog-posts/posts-list.json';
        $posts = [];
        
        if (file_exists($jsonPath)) {
            $jsonContent = file_get_contents($jsonPath);
            $posts = json_decode($jsonContent, true);
            
            // Sort by date (newest first)
            usort($posts, function($a, $b) {
                return strcmp($b['date'], $a['date']);
            });
        }

        if (!empty($posts)) {
            // Featured post (first post)
            $featured = $posts[0];
            $featuredDate = date('M d, Y', strtotime($featured['date']));
            
            // CRITICAL FIX: Use correct thumbnail path
            $thumbnailPath = '/uploads/blog-posts/thumbnails/' . $featured['date'] . '-' . $featured['slug'] . '.png';
            
            echo '<div class="featured">';
            echo '<div class="featured-image">';
            echo '<img src="' . htmlspecialchars($thumbnailPath) . '" alt="' . htmlspecialchars($featured['title']) . '" loading="lazy">';
            echo '</div>';
            echo '<div class="featured-content">';
            echo '<span class="featured-badge">Featured</span>';
            echo '<div class="featured-meta">';
            echo '<span>�� ' . $featuredDate . '</span>';
            echo '<span>⏱️ 5-7 min read</span>';
            echo '</div>';
            echo '<h2>' . htmlspecialchars($featured['title']) . '</h2>';
            echo '<p>' . htmlspecialchars($featured['description']) . '</p>';
            echo '<a href="/uploads/blog-posts/' . $featured['date'] . '-' . $featured['slug'] . '.html" class="btn">Read Full Article</a>';
            echo '</div>';
            echo '</div>';

            // Recent articles
            echo '<h2 class="section-title">Recent Articles</h2>';
            echo '<div class="blog-grid">';
            
            // Show remaining posts (skip featured)
            for ($i = 1; $i < count($posts); $i++) {
                $post = $posts[$i];
                $postDate = date('M d, Y', strtotime($post['date']));
                
                // CRITICAL FIX: Use correct thumbnail path
                $postThumbnail = '/uploads/blog-posts/thumbnails/' . $post['date'] . '-' . $post['slug'] . '.png';
                
                echo '<a href="/uploads/blog-posts/' . $post['date'] . '-' . $post['slug'] . '.html" class="blog-card">';
                echo '<div class="blog-card-image">';
                echo '<img src="' . htmlspecialchars($postThumbnail) . '" alt="' . htmlspecialchars($post['title']) . '" loading="lazy">';
                echo '</div>';
                echo '<div class="blog-card-content">';
                echo '<div class="blog-card-meta">';
                echo '<span>📅 ' . $postDate . '</span>';
                echo '<span>Healthcare AI</span>';
                echo '</div>';
                echo '<h3>' . htmlspecialchars($post['title']) . '</h3>';
                echo '<p>' . htmlspecialchars(substr($post['description'], 0, 120)) . '...</p>';
                echo '<div class="blog-card-footer">Read More →</div>';
                echo '</div>';
                echo '</a>';
            }
            
            echo '</div>';
        } else {
            echo '<div style="text-align: center; padding: 4rem 0;">';
            echo '<p style="font-size: 1.5rem; color: #64748b;">📝 Blog coming soon!</p>';
            echo '</div>';
        }
        ?>
    </div>

    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2025 Dr. Daya Shankar Tiwari. All rights reserved.</p>
            <p style="margin-top: 0.5rem; opacity: 0.8;">Dean, School of Sciences | VaidyaAI Founder | ET GrailHunt PhD</p>
        </div>
    </footer>
</body>
</html>
