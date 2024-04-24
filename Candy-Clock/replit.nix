{ pkgs }: {
  deps = [
    pkgs.kotlin
    pkgs.php82
    pkgs.bashInteractive
    pkgs.nodePackages.bash-language-server
    pkgs.man
  ];
}